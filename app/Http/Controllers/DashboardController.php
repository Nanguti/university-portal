<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Announcement;
use App\Models\Batch;
use App\Models\FinancialInformation;
use Inertia\Inertia;
use Inertia\Response;


class DashboardController extends Controller
{
    public function index(Request $request): Response
    {
        $announcements = Announcement::orderBy('id', 'DESC')->paginate(9);
        $batch = Batch::with('course')->where('id', $request->user()->batch_id)->get();
        $financial_information = FinancialInformation::where('id', $request->user()->student_id)->first();
        return Inertia::render('Dashboard', [
            'financialinformation' => $financial_information,
            'announcements' => $announcements,
            'batch' => $batch
        ]);
    }
}

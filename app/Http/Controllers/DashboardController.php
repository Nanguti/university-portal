<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Announcement;
use App\Models\Assignment;
use App\Models\Batch;
use App\Models\FinancialInformation;
use Inertia\Inertia;
use Inertia\Response;


class DashboardController extends Controller
{
    public function index(Request $request): Response
    {
        $announcements = Announcement::orderBy('id', 'DESC')->paginate(9);
        $assignments = Assignment::with('unit')
            ->where('batch_id', $request->user()->batch_id)
            ->orderBy('id','DESC')
            ->limit(4)
            ->get();
        $batch = Batch::with('course')->where('id', $request->user()->batch_id)
            ->get();
        $financial_information = FinancialInformation::where('id', $request->user()->student_id)
            ->get();
        return Inertia::render('Dashboard', [
            'batch' => $batch,
            'financialinformation' => $financial_information,
            'assignments' => $assignments,
            'announcements' => $announcements,   
        ]);
    }
}

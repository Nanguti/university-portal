<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Batch;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DashbaordController extends Controller
{
    public function index(Request $request): Response
    {
        $announcements = Announcement::orderBy('id', 'DESC')->paginate(9);
        $batch = Batch::with('course')->where('id', $request->user()->id)->get();
        return Inertia::render('Dashboard', [
            'announcements' => $announcements,
            'batch' => $batch
        ]);
    }
}

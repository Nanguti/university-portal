<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Announcement;
use App\Models\FinancialInformation;
use Inertia\Inertia;
use Inertia\Response;


class DashboardController extends Controller
{
    public function index(){
        $financialinformation = FinancialInformation::all();
        $announcements = Announcement::all();
        return Inertia::render("dashboard", [
            "financialinformation"=> $financialinformation,
            "announcement"=> $announcements
        ]);
    }
}

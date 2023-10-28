<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Result;
use App\Models\Award;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function student(Request $request): Response
    {
        $results = Result::with('unit')->where("student_id", $request->user()->id)->get();
        return Inertia::render("Grades", [
            'results' =>$results
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getAward(Request $request): Response
    {
        $award = Award::getAwardForStudent($request->user());
        return Inertia::render('Award', 
        [
            "award" => $award
        ]);
        
    }
}

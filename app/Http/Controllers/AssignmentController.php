<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): Response
    {
        $assignments = Assignment::with('unit')->where(['course_id' =>  $request->user()->course_id, 'batch_id'=> $request->user()->batch_id])->get();
        return Inertia::render("Assignment", ['assignments' => $assignments]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $assignment = Assignment::with('unit')->find($request->id);
        return Inertia::render('AssignmentDetail', ['assignment'=>$assignment]);
    }

}

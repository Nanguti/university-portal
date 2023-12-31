<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GradeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:student', 'verified'])->group(function () {
   
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/award', [GradeController::class, 'getAward'])->name('student.award');
    Route::get('/grades', [GradeController::class, 'getGrades'])->name('student.grades');
    Route::get('/marks', [GradeController::class, 'getMarks'])->name('student.marks');
    Route::get('/announcements', [AnnouncementController::class, 'index']);
    Route::get('/assignment', [AssignmentController::class, 'index'])->name('student.assignment');
    Route::get('/assignment/details', [AssignmentController::class, 'show'])->name('assignment.details');
});
require __DIR__.'/auth.php';

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'percentage_range', 
        'remarks', 
        'name',
        'course_code',
        'credits',
        'final_exam_grade',
        'assignment_scores',
        'overall_grade', 
        'gpa'
    ];
    public function students(){
        return $this->hasMany(Student::class);
    }
}

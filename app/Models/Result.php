<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        "unit_id","student_id","total_marks","grade","remarks",
    ];

    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function marks() {
        return $this->hasMany(Marks::class);
    }

    public static function calculateGradeForStudent($unit_id, $student_id, $total_marks) {
        $result = Result::where('unit_id', $unit_id)
            ->where('student_id', $student_id)
            ->first();
    
        $student = Student::find($student_id); 

        $gradeThresholds = [
            'PhD' => [80, 70, 60, 50],
            'Masters' => [80, 70, 60, 50],
            'Undergraduate' => [70, 60, 50, 40],
            'Diploma' => [70, 60, 50, 40],
            'Certificate' => [70, 60, 50, 40],
        ];
    
        $programLevel = $student->program_level;
        $defaultGrade = 'E';
        $defaultRemarks = 'Fail';
    
        // Check if the program level is in the thresholds array, otherwise, use the default
        if (isset($gradeThresholds[$programLevel])) {
            $thresholds = $gradeThresholds[$programLevel];
            if ($total_marks >= $thresholds[0]) {
                $grade = 'A';
                $remarks = 'Excellent';
            } elseif ($total_marks >= $thresholds[1]) {
                $grade = 'B';
                $remarks = 'Good';
            } elseif ($total_marks >= $thresholds[2]) {
                $grade = 'C';
                $remarks = 'Satisfactory';
            } elseif ($total_marks >= $thresholds[3]) {
                $grade = 'D';
                $remarks = 'Average/Pass';
            } else {
                $grade = $defaultGrade;
                $remarks = $defaultRemarks;
            }
        } else {
            $grade = $defaultGrade;
            $remarks = $defaultRemarks;
        }

        $result->grade = $grade;
        $result->remarks = $remarks;
        $result->save();
    }    

}

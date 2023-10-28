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
    
        $result = Result::where('unit_id', $unit_id)->where('student_id', $student_id)->first();
        if ($total_marks >= 80) {
            $grade = 'A';
            $remarks = 'Excellent';
        } elseif ($total_marks >= 70) {
            $grade = 'B';
            $remarks = 'Good';
        } elseif ($total_marks >= 60) {
            $grade = 'C';
            $remarks = 'Satisfactory';
        } elseif ($total_marks >= 50) {
            $grade = 'D';
            $remarks = 'Average/Pass';
        } else {
            $grade = 'E';
            $remarks = 'Fail';
        }
        $result->grade = $grade;
        $result->remarks = $remarks;
        $result->save();
        
       
    }

    public function calculateAwardForStudent(Student $student) {
        $results = $student->results;

        $totalPercentage = 0;
        $resultCount = $results->count();
        foreach ($results as $result) {
            $totalPercentage += $result->percentage_obtained;
        }

        $averagePercentage = $resultCount > 0 ? $totalPercentage / $resultCount : 0;
        $award = '';
        $remarks = '';
        $degreeLevel = $student->degree_level;

        if ($degreeLevel == "Postgraduate") {
            $award = $averagePercentage >= 50 ? 'Pass' : 'Fail';
        } elseif ($degreeLevel == "Undergraduate/Diploma/Certificate") {
            if ($averagePercentage >= 70) {
                $award = '1st Class Honors';
            } elseif ($averagePercentage >= 60) {
                $award = '2nd Class Honors Upper Division';
            } elseif ($averagePercentage >= 50) {
                $award = '2nd Class Honors Lower Division';
            } elseif ($averagePercentage >= 40) {
                $award = 'Pass';
            }
            if ($degreeLevel == "Certificate" || $degreeLevel == "Diploma") {
                if ($averagePercentage >= 70) {
                    $award = 'Distinction';
                } elseif ($averagePercentage >= 55) {
                    $award = 'Credit';
                }
            }
        }
        $student->award = $award;
        $student->remarks = $remarks;
        $student->save();
        return $award;
    }

}

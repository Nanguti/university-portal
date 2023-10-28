<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'percentage_range', 'remarks'];

    public function students()
    {
        return $this->hasMany(Student::class, 'award_id');
    }

    public static function getAwardForStudent($student) {
        $results = Result::where('student_id', $student->id)->get();


        $totalPercentage = 0;
        $resultCount = $results->count();
        
        foreach ($results as $result) {
            $totalPercentage += $result->total_marks;
        }

        $averagePercentage = $resultCount > 0 ? $totalPercentage / $resultCount : 0;
        $award = '';
        $remarks = '';
        $degreeLevel = $student->program_level;

        if ($degreeLevel == "PhD" || $degreeLevel == "Masters") {
            $award = $averagePercentage >= 50 ? 'Pass' : 'Fail';
        } elseif ($degreeLevel == "Undergraduate") {
            if ($averagePercentage >= 70) {
                $award = '1st Class Honors';
            } elseif ($averagePercentage >= 60) {
                $award = '2nd Class Honors Upper Division';
            } elseif ($averagePercentage >= 50) {
                $award = '2nd Class Honors Lower Division';
            } elseif ($averagePercentage >= 40) {
                $award = 'Pass';
            }
            else {
                $award = 'Fail';
            }
        }
        else if ($degreeLevel == "Certificate" || $degreeLevel == "Diploma") {
            if ($averagePercentage >= 70) {
                $award = 'Distinction';
            } elseif ($averagePercentage >= 55) {
                $award = 'Credit';
            }

            elseif ($averagePercentage >= 40) {
                $award = 'Pass';
            }

            else{
                $award = "Fail";
            }
            
        }
       
        return $award;
    }
    
}

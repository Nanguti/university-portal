<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public function marks() {
        return $this->hasMany(Marks::class);
    }

    public function calculateGradeForStudent(Student $student) {
        
        // Get all results associated with the student
        $results = $student->results;

        // Loop through each result and calculate grade and remarks
        foreach ($results as $result) {
            $percentage = $result->percentage_obtained;
            // ... (rest of the grading logic as previously shown)
            
            // Calculate $grade and $remarks based on your grading logic
            // For example:
            if ($percentage >= 80) {
                $grade = 'A';
                $remarks = 'Excellent';
            } elseif ($percentage >= 70) {
                $grade = 'B';
                $remarks = 'Good';
            } elseif ($percentage >= 60) {
                $grade = 'C';
                $remarks = 'Satisfactory';
            } elseif ($percentage >= 50) {
                $grade = 'D';
                $remarks = 'Average/Pass';
            } else {
                $grade = 'E';
                $remarks = 'Fail';
            }

            // Save the calculated grade and remarks for each result
            $result->grade = $grade;
            $result->remarks = $remarks;
            $result->save();
        }

        // Return the array of calculated grades and remarks for all results
        return $results->map(function ($result) {
            return [
                'grade' => $result->grade,
                'remarks' => $result->remarks,
            ];
        });
    }

    public function calculateAwardForStudent(Student $student) {
        // Get all results associated with the student
        $results = $student->results;

        // Calculate the total percentage and count of results
        $totalPercentage = 0;
        $resultCount = $results->count();

        // Loop through each result and calculate the total percentage
        foreach ($results as $result) {
            $totalPercentage += $result->percentage_obtained;
        }

        // Calculate the average percentage
        $averagePercentage = $resultCount > 0 ? $totalPercentage / $resultCount : 0;

        // Initialize variables for award and remarks
        $award = '';
        $remarks = '';

        // Determine the degree level of the student
        $degreeLevel = $student->degree_level;

        // Calculate awards based on the degree level and average percentage
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

            // Adjust awards for Certificate and Diploma programs
            if ($degreeLevel == "Certificate" || $degreeLevel == "Diploma") {
                if ($averagePercentage >= 70) {
                    $award = 'Distinction';
                } elseif ($averagePercentage >= 55) {
                    $award = 'Credit';
                }
            }
        }

        // Save the calculated award and remarks for the student
        $student->award = $award;
        $student->remarks = $remarks;
        $student->save();

        // Return the calculated award for the student
        return $award;
    }

}

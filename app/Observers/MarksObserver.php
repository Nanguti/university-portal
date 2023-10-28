<?php

namespace App\Observers;
use App\Models\Result;
use App\Models\Marks;
use Illuminate\Support\Facades\DB;

class MarksObserver
{
    public function created(Marks $marks)
    {
        // Handle create event
        $this->updateResults($marks);
    }

    public function updated(Marks $marks)
    {
        // Handle update event
        $this->updateResults($marks);
    }

    public function deleted(Marks $marks)
    {
        // Handle delete event
        $this->updateResults($marks);
    }

    private function updateResults(Marks $marks)
    {

        $result = DB::table('results')
            ->where('unit_id', $marks->unit_id)
            ->where('student_id', $marks->student_id)
            ->first();

        if ($result) {
            DB::table('results')
                ->where('unit_id', $marks->unit_id)
                ->where('student_id', $marks->student_id)
                ->update([
                    'total_marks' => $result->total_marks + $marks->score,
                ]);

        } else {
            DB::table('results')->insert([
                'unit_id' => $marks->unit_id,
                'student_id' => $marks->student_id,
                'total_marks' => $marks->score,
            ]);
        }

        Result::calculateGradeForStudent($marks->unit_id, $marks->student_id, $result ? ($result->total_marks + $marks->score) : $marks->score);

        
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 'course_id', 'batch_id', 'score', 'comment', 'semester', 'unit_id', 'component_name'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function result() {
        return $this->belongsTo(Result::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}

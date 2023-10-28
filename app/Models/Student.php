<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait; // Import the Authenticatable trait
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model implements Authenticatable
{
    use HasFactory, AuthenticableTrait; // Use the Authenticatable trait
    
    protected $fillable = ['first_name', 'last_name', 'student_id', 'course_id', 'batch_id'];
    public function marks()
    {
        return $this->hasMany(Marks::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }

    public function award()
    {
        return $this->belongsTo(Award::class, 'award_id');
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function getAward($student) {
        $award = Award::getAwardForStudent($student);
        return $award;
    }

}

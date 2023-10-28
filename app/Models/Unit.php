<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'course_id'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}

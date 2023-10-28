<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'description', 'duration'];

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function batches(){
        return $this->hasMany(Batch::class);
    }
    public function assignments(){
        return $this->hasMany(Assignment::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}

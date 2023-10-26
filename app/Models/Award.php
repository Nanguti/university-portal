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
    
}

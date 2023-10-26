<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSupport extends Model
{
    use HasFactory;

    protected $table = "studentsupport";

    protected $fillable = [
        'service_name',
        'location',
        'contact_information',
        'available_hours'
    ];

    protected $casts = [
        'available_hours' => 'datetime',
    ];
}

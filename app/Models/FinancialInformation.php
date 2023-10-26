<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'tuition_fee',
        'due_date',
        'payment_status',
        'payment_history',
        'payment_method',
        'student_id'
    ];
}

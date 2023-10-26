<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialInformation extends Model
{
    use HasFactory;

    protected $table = 'financialinformation';
    protected $fillable = [
        'tuition_fee',
        'due_date',
        'payment_status',
        'payment_method',
        'student_id'
    ];

    protected $casts = [
        'due_date' => 'datetime'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

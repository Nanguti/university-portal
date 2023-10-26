<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampusNews extends Model
{
    use HasFactory;
    protected $table = "campusnews";
    protected $fillable = [
        'title',
        'author',
        'content',
        'image'
    ];
}

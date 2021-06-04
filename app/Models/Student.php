<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'registration_number',
        'ID_number',
        'first_name',
        'last_name',
        'phone_number',
        'gender',
        'department',
        'level',
        'class',
        'academic_year',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = [
        'registration_number',
        'landlord_names',
             'landlord_phone_number',
             'landlord_ID_number',
             'gender',
             'current_village',
             'current_cell',
             'current_sector',
             'academic_year',
             
    ];
}

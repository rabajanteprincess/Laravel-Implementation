<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
        protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'birthday',
        'age',
        'placeOfBirth',
        'gender',
        'civil',
        'religion',
        'height',
        'weight',
    ];
}
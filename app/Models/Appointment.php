<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'time',
        'doctor',
        'userid',
        'description'
    ];
}

<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    //
    /**
     * Table name.
     * @var string
     */
    protected $table = 'doctors';

    public $timestamps = true;
    /**
     * Fillable property for mass assignment.
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'phone',
        'mobile_number',
        'dob',
        'qualification',
        'experience',
        'speciality',
    ];
    /**
     * Accessor for custom 'full_name' attribute.
     * @return string
     */
    public function getFullNameAttribute()
    {
        return ucwords(sprintf('%s %s', $this->attributes['first_name'], $this->attributes['last_name']));
    }
}

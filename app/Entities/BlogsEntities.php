<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogsEntities extends Model
{
    protected $table = 'blogs';

    public $timestamps = true;
    /**
     * Fillable property for mass assignment.
     * @var array
     */
    protected $fillable = [
        'article_name',
        'description',
        'publish',
        'delete_flag'
    ];
}

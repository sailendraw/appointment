<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ArticleEntities extends Model
{
    protected $table = 'articles';

    public $timestamps = true;
    /**
     * Fillable property for mass assignment.
     * @var array
     */
    protected $fillable = [
        'article_name',
        'keyword',
        'description',
        'publish',
        'delete_flag'
    ];
}

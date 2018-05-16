<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'content_id',
        'author',
        'image_gallery',
        'rank',
        'category',
        'tags'
    ];
}

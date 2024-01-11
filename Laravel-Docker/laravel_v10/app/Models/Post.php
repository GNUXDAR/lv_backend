<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // ejemplo re relacion polimorfica una a uno image-post
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}

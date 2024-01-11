<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    // ejemplo re relacion polimorfica una a uno image-post
    public function imageable(): MorphTo
    {
        return $this->morphTo('');
    }
}

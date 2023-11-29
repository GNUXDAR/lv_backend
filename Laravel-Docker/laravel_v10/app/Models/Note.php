<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "deadline",
        "done",
        "author"
    ];
    // protected $table = "notes"
    // protected $guarded = 
    // protected $casts = 
    // protected $hidden =
}

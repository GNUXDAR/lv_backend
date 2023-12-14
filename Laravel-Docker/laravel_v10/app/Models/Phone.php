<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        // en caso de no usar la nomenclatura de laravel, relacionar comoe el caso de User
        return $this->belongsTo(User::class);
    }
}

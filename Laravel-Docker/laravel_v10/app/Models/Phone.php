<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        // en caso de no usar la nomenclatura de laravel, relacionar comoe el caso de User
        return $this->belongsTo(User::class);
    }

    // ejemplo re relacion intermedia user, phone, sim
    public function sim(): HasOne
    {
        return $this->hasOne(Sim::class);
    }
}

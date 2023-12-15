<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    // relacion muchos a muchos
    public function users(): BelongsToMany
    {
        // en el caso de no usar la nomenclatura de Laravel, se debe definir la 'tabla' de relacion, luego la 'clave-foranea' y la 'clave-relacionada'
        // return $this->belongsToMany(User::class, 'role_user', 'user_id', 'role_id');
        return $this->belongsToMany(User::class)->withPivot('added_by');
    }
}

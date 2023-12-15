<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'address',
        'zip_code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // relacion uno a uno
    // public function phone(): HasOne
    // {
    //     // en caso de no usar la nomenclatura de laravel, relaciona el userid que se creo en la migreation de phone, con el id de user
    //     // return $this->hasOne(Phone::class, 'userid', 'id');
    //     return $this->hasOne(Phone::class);
    // }

    // relacion una o muchos
    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class);
    }

    // relacion muchos a muchos
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class)->withPivot('added_by');
    }
}

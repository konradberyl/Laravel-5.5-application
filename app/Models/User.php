<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use HasApiTokens,
        Notifiable;
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'age', 'profession', 'town', 'accessType', 'created_at',
        'updated_at'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
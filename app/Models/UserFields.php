<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFields extends Model
{
    /**
     * Disable timestamps
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Table name
     * @var string
     */
    protected $table = 'users_fields';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'profession', 'age', 'town'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
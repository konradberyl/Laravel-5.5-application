<?php

namespace App\Services\User;

use App\Models\User;

class UserService
{

    /**
     * Insert new static user
     */
    public function insertStaticUser()
    {
        $count = User::get()->count();

        $data = [
            'name' => 'user'.$count,
            'email' => 'laraveluser@laravel.lar'.$count,
            'password' => bcrypt('laraveluser'.$count),
            'age' => '24',
            'profession' => 'watcher',
            'town' => 'Warszawa',
            'accessType' => 0
        ];
        User::create($data);
    }

    /**
     * Return collection of users
     * @return Collections
     */
    public function getUsers()
    {
        $users = User::get();

        return $users;
    }
}
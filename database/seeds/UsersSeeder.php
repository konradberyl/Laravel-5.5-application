<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'laraveladmin@laravel.lar',
            'password' => bcrypt('laraveladmin'),
            'type' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'moderator',
            'surname' => 'moderator',
            'email' => 'laravelmoderator@laravel.mod',
            'password' => bcrypt('laravelmoderator'),
            'type' => 'moderator'
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'surname' => 'user',
            'email' => 'laraveluser@laravel.usr',
            'password' => bcrypt('laraveluser'),
            'type' => 'user'
        ]);
    }
}
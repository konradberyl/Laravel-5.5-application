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
            'email' => 'laraveladmin@laravel.lar',
            'password' => bcrypt('laraveladmin'),
            'age' => '24',
            'profession' => 'developer',
            'town' => 'Biała Podlaska',
            'accessType' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'moderator',
            'email' => 'laravelmoderator@laravel.lar',
            'password' => bcrypt('laravelmoderator'),
            'age' => '32',
            'profession' => 'speaker',
            'town' => 'Warszawa',
            'accessType' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'laraveluser@laravel.lar',
            'password' => bcrypt('laraveluser'),
            'age' => '26',
            'profession' => 'writer',
            'town' => 'Wrocław',
            'accessType' => 0
        ]);
    }
}
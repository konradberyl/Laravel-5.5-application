<?php

use Illuminate\Database\Seeder;

class UsersFieldsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_fields')->insert([
            'user_id' => '1',
            'profession' => 'developer',
            'age' => '24',
            'town' => 'Biała Podlaska'
        ]);

        DB::table('users_fields')->insert([
            'user_id' => '2',
            'profession' => 'moderator',
            'age' => '30',
            'town' => 'Warszawa'
        ]);

        DB::table('users_fields')->insert([
            'user_id' => '3',
            'profession' => 'driver',
            'age' => '28',
            'town' => 'Łuków'
        ]);
    }
}
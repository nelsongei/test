<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Nelson Sammy',
            'email'=>'nelson.saammy@gmail.com',
            'password'=>Hash::make('secret')
        ]);
    }
}

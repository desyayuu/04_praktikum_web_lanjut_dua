<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeederMaria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'mariaf', 
            'name' => 'Maria Fadilla',
            'email' => 'mariafadilla15@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
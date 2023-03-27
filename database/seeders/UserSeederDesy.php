<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeederDesy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'desyayuu', 
            'name' => 'Desy Ayurianti',
            'email' => 'desii.ayurianti@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}

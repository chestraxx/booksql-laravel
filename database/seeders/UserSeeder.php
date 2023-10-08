<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'testuser01',
            'email' => 'email1@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'testuser02',
            'email' => 'email2@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'testuser03',
            'email' => 'email3@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
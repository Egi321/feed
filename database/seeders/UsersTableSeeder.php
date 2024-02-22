<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Contoh menggunakan Query Builder
        User::create([
            'name' => 'sandi',
            'email' => 'sandi@gmail.com',
            'password' => bcrypt('sandi1234'),
        ]);

        // Atau contoh menggunakan model Eloquent
        User::create([
            'name' => 'ramadhan',
            'email' => 'ramadhan@gmail.com',
            'password' => bcrypt('sandi1234'),
        ]);
    }
}

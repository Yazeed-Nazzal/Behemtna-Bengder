<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'status' => 0,
            'password' => bcrypt('password'),
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'status' => 1,
            'password' => bcrypt('password'),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Vikar Maulana Arrisyad',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'path_image' => null
        ]);

        $user = User::create([
            'name' => 'User Test',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user'),
            'path_image' => null
        ]);

        $admin->assignRole('admin');
    }
}

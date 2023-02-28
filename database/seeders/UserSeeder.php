<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1')
        ]);
        // $user->assignRole('Admin');

        // Pegawai
        $user = User::create([
            'name' => 'Firdaus Waridil Wishal',
            'email' => 'student@gmail.com',
            'password' => bcrypt('1')
        ]);
        // $user->assignRole('Pegawai');
    }
}

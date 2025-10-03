<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama'     => 'Irfan IT',
            'email'    => 'admin@gmail.com',
            'jabatan'  => 'Admin',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama'     => 'Fadel',
            'email'    => 'fadel@gmail.com',
            'jabatan'  => 'Karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama'     => 'bobon',
            'email'    => 'bobon@gmail.com',
            'jabatan'  => 'Karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);

        User::create([
            'nama'     => 'budi',
            'email'    => 'budi@gmail.com',
            'jabatan'  => 'Karyawan',
            'password' => Hash::make('123123123'),
            'is_tugas' => false,
        ]);
    }
}

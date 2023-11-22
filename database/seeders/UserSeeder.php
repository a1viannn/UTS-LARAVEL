<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; //import karna memanggil Models User
use Illuminate\Support\Str; //karna fungsi string

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void //mengambil User yang ada di folder Models
    {
        User::truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'level' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
    }
}

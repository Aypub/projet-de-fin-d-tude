<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name' => 'Admin',
            'email' => 'admin@example.com', 
            'telephone' => '056777',
            'password' => bcrypt('password'),
            'role' => 'admin',
           ]);
    }
}

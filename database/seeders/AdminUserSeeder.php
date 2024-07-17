<?php

// database/seeders/AdminUserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'Admin',
            'email' => 'deboramalaika@gmail.com',
            'password' => Hash::make('debora'), // password
            'role' => 'admin',
        ]);
    }
}


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
        \App\Models\Role::create([
            'id' => 1,
            'name' => 'Admin'
        ]);
        \App\Models\Role::create([
            'id' => 2,
            'name' => 'Teacher'
        ]);
        \App\Models\Role::create([
            'id' => 3,
            'name' => 'Student'
        ]);
        \App\Models\Role::create([
            'id' => 4,
            'name' => 'Unassigned'
        ]);

        User::create([
            'first_name' => 'Janis',
            'last_name' => 'Kaktus',
            'personal_code' => '101010-12345',
            'user_role_id' => 1,
            'password' => Hash::make('password'),
        ]);
    }
}

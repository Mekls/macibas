<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Miguels',
            'last_name' => 'Dziedatajs',
            'personal_code' => '202020-12345',
            'user_role_id' => 2,
            'password' => Hash::make('password2'),
        ]);
        User::create([
            'first_name' => 'Karlis',
            'last_name' => 'Pelmanis',
            'personal_code' => '303030-12345',
            'form_id' => 1,
            'user_role_id' => 3,
            'password' => Hash::make('password3'),
        ]);
        User::create([
            'first_name' => 'Lolita',
            'last_name' => 'Kanepe',
            'personal_code' => '404040-12345',
            'user_role_id' => 4,
            'password' => Hash::make('password4'),
        ]);
    }
}

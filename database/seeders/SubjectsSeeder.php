<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'name' => 'Math'
        ]);
        Subject::create([
            'name' => 'Latvian'
        ]);
        Subject::create([
            'name' => 'English'
        ]);
        Subject::create([
            'name' => 'PE'
        ]);
        Subject::create([
            'name' => 'Science'
        ]);
        Subject::create([
            'name' => 'IT'
        ]);
        Subject::create([
            'name' => 'Music'
        ]);
        Subject::create([
            'name' => 'Art'
        ]);
        Subject::create([
            'name' => 'Homeroom'
        ]);
        Subject::create([
            'name' => 'Social Studies'
        ]);

        \App\Models\User::factory(10)->create([
            'user_role_id' => 2
        ]);

    }
}

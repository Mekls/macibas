<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Form;
use App\Models\User;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Form::create ([
            'name' => '1a'
        ]);

        User::factory(20)->create([
            'form_id' => 1
        ]);

        Form::create ([
            'name' => '2a'
        ]);

        User::factory(20)->create([
            'form_id' => 2
        ]);

        Form::create ([
            'name' => '3a'
        ]);

        User::factory(20)->create([
            'form_id' => 3
        ]);

    }

}

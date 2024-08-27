<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1A
        //Monday  /////////////////////
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 65,
            'subject_id' => 4,
            'weekday' => 1,
            'period' => 1
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 67,
            'subject_id' => 6,
            'weekday' => 1,
            'period' => 2
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 62,
            'subject_id' => 1,
            'weekday' => 1,
            'period' => 3
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 63,
            'subject_id' => 2,
            'weekday' => 1,
            'period' => 4
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 70,
            'subject_id' => 9,
            'weekday' => 1,
            'period' => 5
        ]);

        // Tuesday /////////////
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 62,
            'subject_id' => 1,
            'weekday' => 2,
            'period' => 1
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 68,
            'subject_id' => 7,
            'weekday' => 2,
            'period' => 2
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 66,
            'subject_id' => 5,
            'weekday' => 2,
            'period' => 3
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 64,
            'subject_id' => 3,
            'weekday' => 2,
            'period' => 4
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 71,
            'subject_id' => 10,
            'weekday' => 2,
            'period' => 5
        ]);

        //  Wednesday  //////////////////
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 66,
            'subject_id' => 5,
            'weekday' => 3,
            'period' => 1
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 65,
            'subject_id' => 4,
            'weekday' => 3,
            'period' => 2
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 68,
            'subject_id' => 7,
            'weekday' => 3,
            'period' => 3
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 62,
            'subject_id' => 1,
            'weekday' => 3,
            'period' => 4
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 63,
            'subject_id' => 2,
            'weekday' => 3,
            'period' => 5
        ]);

        //Thursday  ///////////////////
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 67,
            'subject_id' => 6,
            'weekday' => 4,
            'period' => 1
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 62,
            'subject_id' => 1,
            'weekday' => 4,
            'period' => 2
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 63,
            'subject_id' => 2,
            'weekday' => 4,
            'period' => 3
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 64,
            'subject_id' => 3,
            'weekday' => 4,
            'period' => 4
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 69,
            'subject_id' => 8,
            'weekday' => 4,
            'period' => 5
        ]);

        //  Friday  //////////////
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 62,
            'subject_id' => 1,
            'weekday' => 5,
            'period' => 5
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 69,
            'subject_id' => 8,
            'weekday' => 5,
            'period' => 5
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 63,
            'subject_id' => 2,
            'weekday' => 5,
            'period' => 5
        ]);
        Lesson::create ([
            'form_id' => 1,
            'user_id' => 63,
            'subject_id' => 2,
            'weekday' => 5,
            'period' => 5
        ]);
    }
}

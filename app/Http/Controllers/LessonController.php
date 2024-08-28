<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{

    public function index(Request $request)
    {
        $weekdays = [
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday',
            6 => 'Saturday',
            7 => 'Sunday'
        ];

        $sortColumn = $request->get('sort_by', 'form_id');
        $sortDirection = $request->get('sort_direction', 'asc');

        $lessons = Lesson::with(['form', 'user', 'subject'])
            ->orderBy($sortColumn, $sortDirection)
            ->paginate(16)
            ->withQueryString()
            ->through(function ($lesson) use ($weekdays) {
                $lesson->weekday_name = $weekdays[$lesson->weekday];
                return $lesson;
            });

        return view('lessons.index', compact('lessons', 'sortColumn', 'sortDirection'));
    }
}

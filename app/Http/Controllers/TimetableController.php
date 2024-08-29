<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lesson;

class TimetableController extends Controller
{
    public function index() {
        $user = Auth::user();

        if ($user->user_role_id == 2) {
            $lessons = Lesson::where('user_id', $user->id)
                ->with(['form', 'subject'])
                ->orderBy('weekday')
                ->orderBy('period')
                ->get();
        } elseif ($user->user_role_id == 3) {
            $lessons = Lesson::where('form_id', $user->form_id)
                ->with(['user', 'subject'])
                ->orderBy('weekday')
                ->orderBy('period')
                ->get();
        } else {
            return redirect()->back()->with('error', 'You do not have access to this timetable.');
        }

        return view('timetable.index', compact('lessons'));
    }
}

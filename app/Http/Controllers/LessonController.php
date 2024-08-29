<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;
use App\Models\Subject;
use App\Models\Lesson;
use Illuminate\Support\Facades\Gate;

class LessonController extends Controller
{

    public function index(Request $request)
    {
        $weekdays = [
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday'
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
    public function show(Lesson $lesson) {
        Gate::authorize('crud-actions');
        $weekdays = [
            1 => 'Monday',
            2 => 'Tuesday',
            3 => 'Wednesday',
            4 => 'Thursday',
            5 => 'Friday'
        ];
        $lesson->weekday_name = $weekdays[$lesson->weekday];
        return view('lessons.show', ['lesson'=>$lesson]);
    }
    public function create() {
        Gate::authorize('crud-actions');
        $forms = Form::all();

        $teachers = User::where('user_role_id', 2)->get();

        $subjects = Subject::all();

        return view('lessons.create', compact('forms', 'teachers', 'subjects'));
    }



    public function store(Request $request) {
        Gate::authorize('crud-actions');

        $validatedData = $request->validate([
            'form_id' => 'required|exists:forms,id',
            'user_id' => 'required|exists:users,id',
            'subject_id' => 'required|exists:subjects,id',
            'weekday' => 'required|integer|min:1|max:5',
            'period' => 'required|integer|min:1'
        ]);

        $teacherConflict = Lesson::where('user_id', $request->user_id)
            ->where('weekday', $request->weekday)
            ->where('period', $request->period)
            ->exists();

        if ($teacherConflict) {
            return redirect()->back()->withErrors(['error' => 'The selected teacher is already assigned to another lesson at this time.']);
        }

        $formConflict = Lesson::where('form_id', $request->form_id)
            ->where('weekday', $request->weekday)
            ->where('period', $request->period)
            ->exists();

        if ($formConflict) {
            return redirect()->back()->withErrors(['error' => 'The selected form is already assigned to another lesson at this time.']);
        }

        Lesson::create($validatedData);

        return redirect()->route('lessons.index')->with('success', 'Lesson created successfully.');
        }

        public function edit($id) {
            Gate::authorize('crud-actions');
        $lesson = Lesson::findOrFail($id);
        $forms = Form::all();
        $teachers = User::where('user_role_id', 2)->get();
        $subjects = Subject::all();

        return view('lessons.edit', compact('lesson', 'forms', 'teachers', 'subjects'));
    }

    public function update(Request $request, $id) {
        Gate::authorize('crud-actions');
        $lesson = Lesson::findOrFail($id);

        $validatedData = $request->validate([
            'form_id' => 'required|exists:forms,id',
            'user_id' => 'required|exists:users,id',
            'subject_id' => 'required|exists:subjects,id',
            'weekday' => 'required|integer|min:1|max:5',
            'period' => 'required|integer|min:1'
        ]);

        $teacherConflict = Lesson::where('user_id', $request->user_id)
            ->where('weekday', $request->weekday)
            ->where('period', $request->period)
            ->where('id', '!=', $lesson->id)
            ->exists();

        if ($teacherConflict) {
            return redirect()->back()->withErrors(['error' => 'The selected teacher is already assigned to another lesson at this time.']);
        }

        $formConflict = Lesson::where('form_id', $request->form_id)
            ->where('weekday', $request->weekday)
            ->where('period', $request->period)
            ->where('id', '!=', $lesson->id)
            ->exists();

        if ($formConflict) {
            return redirect()->back()->withErrors(['error' => 'The selected form is already assigned to another lesson at this time.']);
        }

        $lesson->update($validatedData);

        return redirect()->route('lessons.index')->with('success', 'Lesson updated successfully.');
    }

    public function destroy (Lesson $lesson) {
        Gate::authorize('crud-actions');
        $lesson->delete();
        return redirect('/lessons');
    }
}

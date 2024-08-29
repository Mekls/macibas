<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\UserController;
use App\Models\Subject;

//Models
Route::resource('timetable', TimetableController::class)->middleware('auth');
Route::resource('lessons', LessonController::class)->middleware('auth');
Route::resource('subjects', SubjectController::class)->middleware('auth');
Route::resource('forms', FormController::class, [
    'except' => ['edit', 'update']
])->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');

//Auth
Route::get('/', [SessionController::class, 'create'])->name('login');
Route::post('/', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);





///////////// SUBJECT ////////////
// EDIT
Route::get('/subjects/edit/{id}', function ($id) {
    if (Auth::guest()) {
        return redirect('/');
    }

    $subject = Subject::find($id);
    return view('subjects.edit', ['subject' => $subject]);
});
// UPDATE
Route::patch('/subjects/edit/{id}', function ($id) {
    if (Auth::guest()) {
        return redirect('/');
    }

    request()->validate([
        'name' => ['required', 'unique:subjects', 'min:3']
    ]);

    //authorize

    $subject = Subject::findOrFail($id);

    $subject->update([
        'name' => request('name')
    ]);

    return redirect('/subjects');
});
// Destroy
Route::delete('/subjects/edit/{id}', function ($id) {
    if (Auth::guest()) {
        return redirect('/');
    }

    //authorize
    $subject = Subject::findOrFail($id);
    $subject->delete();

    return redirect('/subjects');
});

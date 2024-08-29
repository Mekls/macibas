<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SubjectController extends Controller
{
    public function index() {
        //Auth
        Gate::authorize('crud-actions');
        if (Auth::guest()) {
            return redirect('/');
        }

        $subjects = Subject::all();
        return view ('subjects.index', compact('subjects'));
    }

    public function create() {
        //Auth
        Gate::authorize('crud-actions');
        return view('subjects.create');
    }
    public function store() {
        //Auth
        Gate::authorize('crud-actions');
        request()->validate([
            'name' => ['required', 'unique:subjects'],
        ]);

        Subject::create([
            'name' => request('name')
        ]);

        return redirect('/subjects');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Gate;

class FormController extends Controller
{
    public function index() {
        //Auth
        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }

    public function show(Form $form) {
        //Auth
        Gate::authorize('view-info');
        return view('forms.show', ['form'=>$form]);
    }

    public function create() {
        //Auth
        Gate::authorize('crud-actions');
        return view('forms.create');
    }
    public function store() {
        //Auth
        Gate::authorize('crud-actions');
        request()->validate([
            'name' => ['required', 'unique:forms'],
        ]);

        Form::create([
            'name' => request('name')
        ]);

        return redirect('/forms');
    }
    public function destroy(Form $form) {
        //authorize
        Gate::authorize('crud-actions');
        $form->delete();
        return redirect('/forms');
    }
}

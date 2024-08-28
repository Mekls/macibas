<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index() {
        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }

    public function show(Form $form) {
        return view('forms.show', ['form'=>$form]);
    }
}

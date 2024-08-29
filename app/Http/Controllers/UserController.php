<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index() {
        Gate::authorize('view-info');
        $users = User::all();
        return view('users.index', compact('users'));
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return View('users.create');
    }

    public function show(User $user)
    {
        return View('users.show', compact('user'));
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function getAllUser() {
        $users = User::all();
        return view('admin.users')->with('users', $users);
    }
}

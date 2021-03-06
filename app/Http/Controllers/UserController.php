<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages/users/index');
    }

    public function create()
    {
        return view('pages/users/create');
    }

    public function edit()
    {
        return view('pages/users/edit');
    }

    public function list()
    {
        return view('pages/users/list');
    }
}

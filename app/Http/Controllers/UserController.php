<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return Inertia::render('Index',[
           'users' => $users
        ]);
    }
    public function create()
    {
        $users = DB::table('users')->get();

        return Inertia::render('Pages/Index', ['users' => $users]);
    }
}

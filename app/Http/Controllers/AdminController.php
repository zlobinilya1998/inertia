<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->get();
        return Inertia::render('Pages/AdminPanel',['users'=> $users]);
    }
}

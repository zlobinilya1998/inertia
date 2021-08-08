<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    //
    public function show()
    {
        return Inertia::render('Pages/Index',['data'=>'12.12.12']);
    }
}

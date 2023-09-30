<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function dashboard()
    {
        return view('welcome');
    }

    public function form() {
        return view('student.form');
    }
}

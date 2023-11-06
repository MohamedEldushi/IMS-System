<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightStatusController extends Controller
{
    //
    public function index(){
        return view('home.flightstatus');
    }
}

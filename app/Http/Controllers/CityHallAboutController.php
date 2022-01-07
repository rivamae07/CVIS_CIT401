<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityHallAboutController extends Controller
{
    public function cityhallindex(){
        return view('cityhall-about');
    }
}

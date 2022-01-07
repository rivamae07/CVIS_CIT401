<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileAboutController extends Controller
{
    public function mobileindex(){
        return view('mobile-about');
    }
}

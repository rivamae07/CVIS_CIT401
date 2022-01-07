<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $utype = Auth::user()->utype;
        $checkrole = explode(',', $utype);
        if (in_array('ADM', $checkrole)) {
            return redirect('/dashboard');
        } else if (in_array('CHV', $checkrole)){
            return redirect('cityhall/dashboard');
        }
        else {
            return redirect('/mobile/dashboard');
        }

    }
}

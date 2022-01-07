<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\ProductStock;
use App\Models\ProductRequest;
use App\Models\ProductSizeStock;

class ADMMobileRequestsController extends Controller
{
    public function request(){
        return view ('ADMmobilerequest.request');
    }

    public function history(){
        $requests = ProductRequest::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'MCV')->get();
        return view('ADMmobilerequests.history', compact('requests'));
    }
}

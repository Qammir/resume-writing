<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() 
    {
        return view('index');
    }
    public function Create(Request $request)
    {
    	$user  = $request->all();
    	return view('checkout',compact('user'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('index');
    }
    public function Profile()
    {
        return view('profile');
    }
    public function Service()
    {
        return view('service');
    }
    public function About()
    {
        return view('about');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home');
    }
    public function Profile()
    {
        return view('profile');
    }
    public function Service()
    {
        return view('service');
    }
    public function AboutUs()
    {
        return view('about-us');
    }
    public function Company()
    {
        return view('company');
    }
    public function Order()
    {
        return view('order');
    }
}
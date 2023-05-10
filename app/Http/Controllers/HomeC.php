<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeC extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function about()
    {
        return view('home.about');
    }

    public function track()
    {
        return view('home.track');
    }
}

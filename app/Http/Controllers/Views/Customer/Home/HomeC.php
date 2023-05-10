<?php

namespace App\Http\Controllers\Views\Customer\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

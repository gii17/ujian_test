<?php

namespace App\Http\Controllers\Views\Admin\Konser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonserC extends Controller
{
    public function index()
    {
        return view('office.konser.index');
    }

    public function create()
    {
        return view('office.konser.konser_form');
    }
}

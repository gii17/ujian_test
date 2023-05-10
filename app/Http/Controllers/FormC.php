<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Konser, Pesanan};

class FormC extends Controller
{
    public function index()
    {
        $data = [
            'konser' => Konser::get()->pluck('total', 'id'),
        ];
        return view('home.pesanan', $data);
    }

    public function ticket(Pesanan $pesanan, $ticket_number)
    {
        $pesanan = Pesanan::where('ticket_number', $ticket_number)->firstOrFail();
        $data = [
            'ticket' => $pesanan,
        ];
        return view('home.kwitansi', $data);
    }
}

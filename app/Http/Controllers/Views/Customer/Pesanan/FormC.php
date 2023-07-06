<?php

namespace App\Http\Controllers\Views\Customer\Pesanan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Konser, Pesanan};
use RealRashid\SweetAlert\Facades\Alert;

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

    public function pemesanan()
    {
        $data = [
            'pesanan' =>  Pesanan::all(),
        ];

        return view('office.pesanan.pesanan', $data);

    }

    public function pesanan_edit($ticket_number)
    {
        $pesanan = Pesanan::where('ticket_number', $ticket_number)->firstOrFail();
        $data = [
            'pesanan' => $pesanan,
            'method'  => 'PUT',
            'konser'  => Konser::get()->pluck('total', 'id'),
        ];

        return view('office.pesanan.pesanan_form', $data);
    }

    public function acc_pesanan()
    {
        return view('office.pesanan.acc_pesanan');
    }

    public function detail(Request $request)
    {
        $ticket_id = $request->input('ticket_id');
        $pesanan = Pesanan::where('ticket_number', $ticket_id)->first();

        if (!isset($pesanan)) :
            Alert::error('Upsss..', 'Ticket not found');
            return redirect()->back();
        elseif($pesanan->status == 'confirmed') :
            Alert::error('Upsss..', 'Ticket Sudah di Confirmed');
            return redirect()->back();
        endif;

        return view('office.pesanan.detail', compact('pesanan'));
    }

    public function pesanan_trash()
    {
        $pesanan = Pesanan::onlyTrashed()->get();

        return view('office.pesanan.trash', [
            'pesanan' => $pesanan
        ]);
    }

    public function laporan()
    {
        $data = [
            'confirmed'   => Pesanan::where('status', 'confirmed')->get(),
            'unconfirmed' => Pesanan::where('status', 'unconfirmed')->get()
        ];

        return view('office.pesanan.laporan', $data);
    }
}

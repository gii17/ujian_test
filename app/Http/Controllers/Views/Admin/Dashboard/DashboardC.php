<?php

namespace App\Http\Controllers\Views\Admin\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Pesanan, Konser};

class DashboardC extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('office.home');
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
            'method' => 'PUT',
            'konser' => Konser::get()->pluck('total', 'id'),
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

        if (!$pesanan) {
            return redirect()->back()->with('error', 'Ticket ID tidak ditemukan!');
        }

        return view('office.pesanan.detail', compact('pesanan'));
    }

    public function laporan(Request $request)
    {
        $status = $request->input('status');

        if ($status == 'not_confirmed') {
            $pesanan = Pesanan::where('status', 'not_confirmed')->get();
        } elseif ($status == 'confirmed') {
            $pesanan = Pesanan::where('status', 'confirmed')->get();
        } else {
            $pesanan = Pesanan::all();
        }

        return view('office.pesanan.laporan', compact('pesanan'));
    }
}

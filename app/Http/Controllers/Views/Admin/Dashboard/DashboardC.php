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

<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Customer,Konser,Pesanan};
use Illuminate\Console\View\Components\Alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class PesananCs extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'quantity' => ['required'],
            'address' => ['required'],
            'konser_id' => ['required'],
        ]);

        $konser = Konser::findOrFail($validatedData['konser_id']);
        $konser->ticket_available -= $request->quantity;
        $konser->save();
        $totalPrice = $validatedData['quantity'] * $konser->price;

        $customer = Customer::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
        ]);

        $randomNumber = mt_rand(10000000, 99999999);
        $pesanan = Pesanan::create([
            'customer_id' => $customer->id,
            'konser_id' => $konser->id,
            'quantity' => $validatedData['quantity'],
            'total_price' => $totalPrice,
            'ticket_number' => $randomNumber,
            'status' => 'unconfirmed'
        ]);

        return redirect()->route('ticket', $randomNumber);
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'quantity' => ['required'],
            'address' => ['required'],
        ]);

        $konser = $pesanan->konser;
        $konser->ticket_available += $pesanan->quantity;
        $konser->ticket_available -= $validatedData['quantity'];
        $konser->save();
        $totalPrice = $validatedData['quantity'];

        $pesanan->customer->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
        ]);

        $pesanan->update([
            'quantity' => $validatedData['quantity'],
            'total_price' => $totalPrice,
        ]);
        FacadesAlert::success('Updated Successfully', 'Data Berhasil diubah');
        return redirect()->route('pesanan.index');

    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->back();
    }

    public function pesanan_restore($id = null)
    {
        if($id != null) :
            $pesanan = Pesanan::onlyTrashed()
                ->where('id', $id)
                ->restore();
        else :
            $pesanan = Pesanan::withTrashed()->restore();
        endif;
        return redirect()->route('pesanan.pesanan-trash');
    }

    public function siswa_forceDelete($id = null)
    {
        if($id != null) :
            $pesanan = Pesanan::onlyTrashed()
                ->where('id', $id)
                ->forceDelete();
        else :
            $pesanan = Pesanan::onlyTrashed()->forceDelete();
        endif;
        return redirect()->route('pesanan.pesanan-trash');
    }

    public function acc(Request $request, Pesanan $pesanan)
    {
        $pesanan->status = 'confirmed';
        $pesanan->save();

        return redirect()->route('pesanan.acc')->with('success', 'Pesanan berhasil dikonfirmasi!');
    }
}

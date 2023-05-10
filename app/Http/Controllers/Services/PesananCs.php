<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Customer,Konser,Pesanan};

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
            'status' => 'Not Confirmed'
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

        return redirect()->route('list-pemesanan');

    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect()->back();
    }

    public function acc(Request $request, Pesanan $pesanan)
    {
        $pesanan->status = 'confirmed';
        $pesanan->save();

        return redirect()->route('list-pemesanan')->with('success', 'Pesanan berhasil dikonfirmasi!');
    }
}

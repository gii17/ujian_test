<?php

namespace App\Http\Controllers\Services\Admin\Konser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Konser,guestStart};
use RealRashid\SweetAlert\Facades\Alert;

class KonserCs extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name_konser' => 'required',
            'name_artist.*' => 'required',
            'price' => ['required', 'regex:/^\d{1,13}(\.\d{3})*$/'],
            'date_konser' => ['required'],
            'time_konser' => ['required'],
            'location_konser' => ['required'],
            'ticket_available' => ['required'],
        ]);

        $konser = Konser::create([
            'name_konser' => $request->name_konser,
            'price' => (int) str_replace('.', '', $request->price),
            'date_konser' => $request->date_konser,
            'time_konser' => $request->time_konser,
            'location_konser' => $request->location_konser,
            'ticket_available' => $request->ticket_available
        ]);
        $guest_list = explode(',',  implode($request->name_artist));

        foreach ($guest_list as $name ) {
            $bintang_tamu = new guestStart();
            $bintang_tamu->name_artist = $name;
            $bintang_tamu->konser_id = $konser->id;
            $bintang_tamu->save();
        }

        Alert::success('Created Succesfully', 'Konser Berhasil dibuat');
        return redirect()->route('konser.index');
    }

    public function update(Request $request, $konser_id)
    {
        $request->validate([
            'name_konser' => 'required',
            'name_artist.*' => 'required',
            'price' => ['required', 'regex:/^\d{1,13}(\.\d{3})*$/'],
            'date_konser' => ['required'],
            'time_konser' => ['required'],
            'location_konser' => ['required'],
            'ticket_available' => ['required'],
        ]);

        $konser = Konser::findOrFail($konser_id);

        $konser->name_konser = $request->name_konser;
        $konser->price = (int) str_replace('.', '', $request->price);
        $konser->date_konser = $request->date_konser;
        $konser->time_konser = $request->time_konser;
        $konser->location_konser = $request->location_konser;
        $konser->ticket_available = $request->ticket_available;
        $konser->save();

        $konser->guest()->delete();
        if ($request->has('name_artist')) {
            foreach(explode(',', implode($request->name_artist)) as $artist_name) {
                $artist = new guestStart(['name_artist' => $artist_name]);
                $konser->guest()->save($artist);
            }
        }
        $konser->save();
        Alert::success('Updated Succesfully', 'Konser Berhasil dibuat');
        return redirect()->route('konser.index');
    }
}

<?php

namespace App\Http\Controllers\Views\Admin\Konser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Konser as Model, guestStart};

class KonserC extends Controller
{
    private $ViewIndex = '.konser.index';
    private $viewCreate = '.konser.konser_form';
    private $viewUpdate = '.konser.konser_form';
    private $viewDetail = '.konser.detail';

    public function index()
    {
        $data = [
            'konser' => Model::all()
        ];
        return view('office' . $this->ViewIndex, $data);
    }

    public function create()
    {
        $konser = new Model();
        $data = [
            'model' => $konser,
            'method' => 'POST',
            'route' => 'Services.store.konser',
            'button' => 'CREATE',
            'artis' => null
        ];
        if (!empty($existing_artists)) {
            $data['artis'] = $existing_artists;
        }
        return view('office' . $this->viewCreate, $data);
    }

    public function update($name_konser, $konser_id)
    {
        $konser = Model::where('name_konser', $name_konser)->firstOrFail();
        $existing_artists = guestStart::where('konser_id', $konser_id)->pluck('name_artist')->toArray();
        $data = [
            'model' => $konser,
            'method' => 'PUT',
            'route' => ['Services.update.konser', $konser->id],
            'button' => 'UPDATE',
            'artis' => $existing_artists ?? NULL
        ];
        return view('office' . $this->viewUpdate ,$data);
    }

    public function show(Model $konser)
    {
        $data = [
            'konser' => $konser
        ];
        return view('office' . $this->viewDetail, $data);
    }
}

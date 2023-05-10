<?php

namespace App\Http\Controllers\Views\Admin\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User as Model;

class StaffC extends Controller
{
    private $ViewIndex = '.staff.index';
    private $viewCreate = '.staff.staff_form';
    private $viewUpdate = '.staff.staff_form';
    private $viewDetail = '.staff.detail';

    public function index()
    {
        $data = [
            'staff' => Model::all()
        ];
        return view('office' . $this->ViewIndex, $data);
    }

    public function create()
    {
        $staff = new Model();
        $data = [
            'model' => $staff,
            'method' => 'POST',
            'route' => 'Services.store',
            'button' => 'CREATE',
        ];
        return view('office.staff.staff_form', $data);
    }

    public function update($name)
    {
        $staff = Model::where('name', $name)->firstOrFail();
        $data = [
            'model' => $staff,
            'method' => 'PUT',
            'route' => ['Services.update', $staff->id],
            'button' => 'UPDATE',
        ];
        return view('office.staff.staff_form', $data);
    }
}

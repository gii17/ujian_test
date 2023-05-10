<?php

namespace App\Http\Controllers\Services\Admin\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class StaffCs extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:13',
            'address' => 'required',
            'password' => 'required|min:8',
         ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole('Staff');
        Alert::success('Created Succesfully', 'Data user berhasil di tambahkan');
        return redirect()->route('staf.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:13',
            'address' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        if(empty($request->input('password'))) {
            $user->password = 'password';
        } else {
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();
        Alert::success('Updated Succesfully', 'Data user berhasil di Update');
        return redirect()->route('staf.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            Alert::success('Upps Error', 'Sepertinya Terjadi Kesalahan');
            return redirect()->back();
        }
        $user->delete();
        return redirect()->route('staf.index');
    }
}

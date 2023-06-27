<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function showAddPelanggan()
    {
        return view('user.add');
    }
    public function addPelanggan(Request $request)
    {

        $previousUrl = url()->previous();

        $password = bcrypt($request->password);

        $newPelanggan = new Pelanggan();

        $newPelanggan->username = $request->username;
        $newPelanggan->password = $password;
        $newPelanggan->email = $request->email;
        $newPelanggan->notelp = $request->notelp;
        $newPelanggan->gender = $request->gender;
        $newPelanggan->role = 'user';

        $newPelanggan->save();

        if ($previousUrl != 'http://127.0.0.1:8000/login') {
            return redirect('/table-pelanggan')->with('success', 'Pelanggan Berhasil Ditambahkan');
        } else {
            return redirect('/login');
        }

    }

    public function editPelanggan(Request $request)
    {
        $password = bcrypt($request->password);
        Pelanggan::where('id', $request->id)->update([
            'username' => $request->username,
            'password' => $password,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'gender' => $request->gender,
            'role' => $request->role,
        ]);

        return redirect('/table-pelanggan')->with('success', 'Pelanggan Berhasil Diupdate');
    }

    public function showPelanggan()
    {
        $getPelanggan = Pelanggan::all();

        return view('user.show', compact('getPelanggan'));

    }

    public function showEditPelanggan($id)
    {
        $getPelanggan = Pelanggan::where('id', $id)->get();

        return view('user.edit', compact('getPelanggan'));

    }
}
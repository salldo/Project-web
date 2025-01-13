<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $showberanda = auth()->user()-> isAdmin();
        $anggotas = Anggota::all();
        return view('admin.pages.anggota.index', compact('anggotas','showberanda'));
    }

    public function show($id) {
        $showberanda = auth()->user()-> isAdmin();
        $anggotas = Anggota::find($id);
        return view('admin.pages.anggota.edit', compact('anggotas', 'showberanda'));
    }

    public function create() {
        $showberanda = auth()->user()-> isAdmin();
        return view('admin.pages.anggota.tambah', compact('showberanda'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_anggota' => 'required|',
            'tempat_lahir' => 'required|',
            'tgl_lahir' => 'required|',
            'gender' => 'required|',
            'no_telepon' => 'required|',
            'alamat' => 'required|',
        ]);

        Anggota::insert([
            'nama_anggota'=> $request->nama_anggota,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'no_telepon'=> $request->no_telepon,
            'alamat'=> $request->alamat,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('admin.anggota')->with(['berhasil' => 'Data Berhasil Ditambah']);
    }

    public function delete($id) {
        Anggota::find($id)->delete();
        return redirect()->route('admin.anggota')->with(['berhasil' => 'Data Berhasil Dihapus']);
    }

    public function update(Request $request, $id) {

        $request->validate([
            'nama_anggota' => 'required|',
            'tempat_lahir' => 'required|',
            'tgl_lahir' => 'required|',
            'gender' => 'required|',
            'no_telepon' => 'required|',
            'alamat' => 'required|',
        ]);

        $anggota = Anggota::find($id);

        $data = $request->except('_token');

        $data['updated_at'] = now();

        $anggota->update($data);

        return redirect()->route('admin.anggota')->with(['berhasil' => 'Data Berhasil Di Perbarui']);
    }
}

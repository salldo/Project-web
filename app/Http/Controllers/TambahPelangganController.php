<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TambahPelangganController extends Controller
{
    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }

    public function store(Request $request){
        $request->validate([
            'nama_anggota' => 'required|',
            'tempat_lahir' => 'required|',
            'tgl_lahir' => 'required|',
            'gender' => 'required|',
            'no_telepon' => 'required|',
            'alamat' => 'required|',
        ]);

        DB::table('anggota')-> insert([
            'nama_anggota'=> $request->nama_anggota,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'no_telepon'=> $request->no_telepon,
            'alamat'=> $request->alamat,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/pelanggan');
    }


}

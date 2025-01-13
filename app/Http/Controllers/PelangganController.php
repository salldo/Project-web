<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Anggota;


class PelangganController extends Controller
{
    public function index()
    {
        $anggotas = DB::table('anggota')->get();
        return view('pelanggan.indexpelanggan', compact('anggotas'));
    }
    public function tambahpelanggan()
    {
        return view('pelanggan.tambahpelanggan');
    }

    public function delete($id) {
        Anggota::find($id)->delete();
        
        return redirect("/pelanggan");
    }
}

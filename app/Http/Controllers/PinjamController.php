<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PinjamBukuController extends Controller
{
    public function index()
    {
        // Contoh: Ambil data peminjaman dari database
        $dataPeminjaman = []; // Query data dari model Peminjaman

        return view('admin.pinjam.index', compact('dataPeminjaman'));
    }
}

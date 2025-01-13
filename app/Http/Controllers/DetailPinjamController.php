<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailPinjamController extends Controller
{
    public function index()
    {
        $detail = DB::table('detail_pinjam')->get();
        return view('pages.peminjaman', compact('detail'));
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Buku;


class BukuController extends Controller
{
    public function index()
    {
        $showberanda = auth()->user()->isAdmin();
        $buku = Buku::all();
        return view('admin.pages.buku.index', compact('buku', 'showberanda'));
    }

    public function show($id)
    {
        $showberanda = auth()->user()->isAdmin();
        $buku = Buku::find($id);
        return view('admin.pages.buku.edit', compact('buku', 'showberanda'));
    }

    public function create()
    {
        $showberanda = auth()->user()->isAdmin();
        return view('admin.pages.buku.tambah', compact('showberanda'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_buku' => 'required',
            'judul_buku' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'url_gambar' => 'image|mimes:jpeg,jpg,png',
        ]);

        // $data = $request->except('_token');

        $imageName = time().'.'.$request->filename->extension();

        $request->filename->move(public_path('gambarbuku'), $imageName);

        $buku = new Buku;

        $buku->jenis_buku = $request->input('jenis_buku');
        $buku->judul_buku = $request->input('judul_buku');
        $buku->pengarang = $request->input('pengarang');
        $buku->penerbit = $request->input('penerbit');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->isbn = $request->input('isbn');
        $buku->url_gambar = $imageName;

        $buku->save();


        // if ($request->hasFile('url_gambar')) {
        //     $image = $request->file('url_gambar');
        //     $imageName = Str::random(15) . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/gambarbuku', $imageName);
        //     $data['url_gambar'] = $imageName;
        // }
        // Buku::create($data);
        

        return redirect()->route('admin.buku')->with(['berhasil' => 'Data Berhasil Ditambah']);
    }
}

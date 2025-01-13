@extends('admin.pages.components.layouts.admin')
@section('judul', 'Tambah Buku')

@section('content')

    <form action="{{ route('admin.buku.tambah.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group p-3">
            <label>Jenis Buku</label>
            <select class="form-select" aria-label="Default select example" name="jenis_buku">
                <option value="Novel" selected>Novel</option>
                <option value="Komik">Komik</option>
                <option value="Manga">Manga</option>
                <option value="Light Novel">Light Novel</option>
                <option value="Karya Ilmiah">Karya Ilmiah</option>
                <option value="Kamus">Kamus</option>
                <option value="Ensiklopedia">Ensiklopedia</option>
                <option value="Biografi">Biografi</option>
                <option value="Majalah">Majalah</option>
            </select>
            @error('jenis_buku')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group p-3">
            <label>Judul Buku</label>
            <input type="text" name='judul_buku' class="form-control" placeholder="Masukkan Judul Buku"
                value="{{ old('judul_buku') }}">
            @error('judul_buku')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label>Pengarang</label>
            <input type="text" name='pengarang' class="form-control" placeholder="Masukkan Nama Pengarang"
                value="{{ old('pengarang ') }}">
            @error('pengarang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label>Penerbit</label>
            <input type="text" name='penerbit' class="form-control" placeholder="Masukkan Penerbit"
                value="{{ old('penerbit') }}">
            @error('penerbit')
                <div class ="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group p-3">
            <label>Tahun Terbit</label>
            <input type="text" name='tahun_terbit' class="form-control" placeholder="Masukkan Tahun Terbit"
                value="{{ old('tahun_terbit') }}">
            @error('tahun_terbit')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label>ISBN Buku</label>
            <input type="text" name='isbn' class="form-control" placeholder="Masukkan ISBN Buku"
                value="{{ old('isbn') }}">
            @error('isbn')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- class="form-control-file" id="url" name="url_gambar" --}}
        <div class="form-group p-3">
            <label for="url">File Gambar</label>
            <input type="file" name="filename" required class="form-control">
            {{-- @error('url_gambar')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        </div>

        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection

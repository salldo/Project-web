@extends('admin.pages.components.layouts.admin')
@section('judul', 'Tambah Data Anggota')

@section('content')

    <form action="{{ route('admin.anggota.tambah.store') }}" method="POST">
        @csrf
        <div class="form-group p-3">
            <label>Nama Lengkap</label>
            <input type="text" name='nama_anggota' class="form-control" placeholder="Masukkan Nama Lengkap"
                value="{{ old('nama_anggota') }}">
            @error('nama_anggota')
                <div class ="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label>Tempat Lahir</label>
            <input type="text" name='tempat_lahir' class="form-control" placeholder="Masukkan Tempat Lahir mu"
                value="{{ old('tempat_lahir') }}">
            @error('tempat_lahir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label>Tanggal Lahir</label>
            <input type="date" name='tgl_lahir' class="form-control" placeholder="Masukkan tanggal Lahir"
                value="{{ old('tgl_lahir') }}">
            @error('tgl_lahir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label>Gender</label>
            <select class="form-select" aria-label="Default select example" name="gender">
                <option value="laki laki" selected>Laki Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label>No Handphone</label>
            <input type="text" name='no_telepon' class="form-control" placeholder="Masukkan No Handphone"
                value="{{ old('no_telepon') }}">
            @error('no_telepon')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label>Alamat</label>
            <input type="text" name='alamat' class="form-control" placeholder="Masukkan Alamat"
                value="{{ old('alamat') }}">
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection

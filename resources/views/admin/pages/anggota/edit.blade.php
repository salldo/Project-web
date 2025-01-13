@extends('admin.pages.components.layouts.admin')
@section('judul', 'Edit Data Anggota')

@section('content')

    <form action="{{ route('admin.anggota.update.store', $anggotas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group p-3">
            <label>Nama Lengkap</label>
            <input type="text" name='nama_anggota' class="form-control" placeholder="Masukkan Nama Lengkap"
                value="{{ $anggotas->nama_anggota }}">
            @error('nama_anggota')
                <div class ="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label>Tempat Lahir</label>
            <input type="text" name='tempat_lahir' class="form-control" placeholder="Masukkan Tempat Lahir mu"
                value="{{ $anggotas->tempat_lahir }}">
            @error('tempat_lahir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label>Tanggal Lahir</label>
            <input type="date" name='tgl_lahir' class="form-control" placeholder="Masukkan tanggal Lahir"
                value="{{ $anggotas->tgl_lahir }}">
            @error('tgl_lahir')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-3">
            <label>Gender</label>
            <select class="form-select" aria-label="Default select example" name="gender">
                <option value="laki laki" {{ $anggotas->gender == 'laki laki' ? 'selected' : '' }}>Laki Laki</option>
                <option value="perempuan" {{ $anggotas->gender == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label>No Handphone</label>
            <input type="number" name='no_telepon' class="form-control" placeholder="Masukkan No Handphone"
                value="{{ $anggotas->no_telepon }}">
            @error('no_telepon')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group p-3">
            <label>Alamat</label>
            <input type="text" name='alamat' class="form-control" placeholder="Masukkan Alamat"
                value="{{ $anggotas->alamat }}">
            @error('alamat')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="p-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection

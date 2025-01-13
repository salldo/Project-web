@extends('admin.pages.components.layouts.admin')
@section('title', 'Dashboard Anggota')

@section('content')
    @if (session()->has('berhasil'))
        <div class="alert alert-success"
            style="z-index: 999; position: fixed; width: 100%; top: 0; border-radius: 0px !important; height: 70px; display: flex; align-items: center;">
            <p style="margin: 0px">
                {{ session('berhasil') }}
            </p>
        </div>
    @endif

    <div class="p-3">
        {{-- Kelola Profile Pelanggan --}}
        <a href="{{ route('admin.anggota.tambah') }}" class="btn btn-primary my-3">Tambah Data Anggota</a>
        {{-- Kelola user / Pengguna Pelanggan --}}

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($anggotas as $key => $value)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $value->nama_anggota }}</td>
                        <td>{{ $value->tempat_lahir }}</td>
                        <td>{{ $value->tgl_lahir }}</td>
                        <td>{{ $value->gender }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->no_telepon }}</td>
                        <td style="display: flex;">
                            <a href="{{ route('admin.anggota.update', $value->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('admin.anggota.delete', $value->id) }}" method="post"
                                style="margin-left: 10px">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    {{-- tidak ada data  --}}
                @empty
                    <tr>
                        <td colspan="8" style="text-align: center;">No data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

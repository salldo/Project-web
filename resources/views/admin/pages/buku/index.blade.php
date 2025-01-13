@extends('admin.pages.components.layouts.admin')

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
        <a href="{{ route('admin.buku.tambah') }}" class="btn btn-primary my-3">Tambah Buku</a>
        {{-- Kelola user / Pengguna Pelanggan --}}

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Url Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($buku as $key => $value)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $value->jenis_buku }}</td>
                        <td>{{ $value->judul_buku }}</td>
                        <td>{{ $value->pengarang }}</td>
                        <td>{{ $value->penerbit }}</td>
                        <td>{{ $value->tahun_terbit }}</td>
                        <td>{{ $value->isbn }}</td>
                        <td>{{ $value->url_gambar }}</td>
                        <td style="display: flex;">
                            <a href="#" class="btn btn-success">Edit</a>
                            <form action="" method="post"
                                style="margin-left: 10px">

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

@extends('admin.pages.components.layouts.admin')
@section('judul', 'DetailPinjam')
@section('content')

@section('content')
    <div class="p-3">
        {{-- Informasi Peminjaman --}}
        @foreach ($detail as $peminjaman)
            <div class="card">
                <div class="card-header">
                    Detail Peminjaman
                </div>
                <div class="card-body">
                    <h5 class="card-title">ID Peminjaman: {{$peminjaman->id}}</h5>
                    <p class="card-text">Tanggal Peminjaman:</p>
                    <p class="card-text">Tanggal Pengembalian: {{$peminjaman->tgl_kembali}}</p>
                    <p class="card-text">Anggota Peminjam: </p>
                    <p class="card-text">Buku yang Dipinjam: </p>
                    {{-- Tambahkan tombol untuk kembali ke halaman sebelumnya --}}
                    <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                </div>

            </div>
        @endforeach
    </div>
@endsection

@extends('admin.pages.components.layouts.admin')
@section('judul', 'Dashboard')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        @php
            // Data dummy untuk 20 buku
            $dummyBooks = [
                [
                    'jenis_buku' => 'Fiksi',
                    'judul_buku' => 'Laskar Pelangi',
                    'pengarang' => 'Andrea Hirata',
                    'penerbit' => 'Bentang Pustaka',
                    'tahun_terbit' => '2005',
                    'isbn' => '978-979-3062-79-5',
                    'url_gambar' => 'default.jpg'
                ],
                [
                    'jenis_buku' => 'Nonfiksi',
                    'judul_buku' => 'Atomic Habits',
                    'pengarang' => 'James Clear',
                    'penerbit' => 'Penguin Random House',
                    'tahun_terbit' => '2018',
                    'isbn' => '978-0735211292',
                    'url_gambar' => 'default.jpg'
                ],
                [
                    'jenis_buku' => 'Fiksi',
                    'judul_buku' => 'Harry Potter and the Sorcerer\'s Stone',
                    'pengarang' => 'J.K. Rowling',
                    'penerbit' => 'Bloomsbury',
                    'tahun_terbit' => '1997',
                    'isbn' => '978-0747532699',
                    'url_gambar' => 'default.jpg'
                ],
                // Tambahkan 17 buku lainnya
            ];

            // Menambahkan data hingga 20 buku
            for ($i = 4; $i <= 20; $i++) {
                $dummyBooks[] = [
                    'jenis_buku' => 'Fiksi',
                    'judul_buku' => 'Judul Buku ' . $i,
                    'pengarang' => 'Pengarang ' . $i,
                    'penerbit' => 'Penerbit ' . $i,
                    'tahun_terbit' => '20' . str_pad($i, 2, '0', STR_PAD_LEFT),
                    'isbn' => '978-0000-' . str_pad($i, 4, '0', STR_PAD_LEFT),
                    'url_gambar' => 'default.jpg'
                ];
            }
        @endphp

        @foreach ($dummyBooks as $key => $buku)
            <div class="col-lg-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Buku {{ $key + 1 }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center" style="padding-bottom: 40px">
                            <img src="storage/{{ $buku['url_gambar'] }}" class="img-fluid"
                                style="width: 150px; height: 200px; border-radius: 4px; box-shadow: 8px 8px 4px;"
                                alt="Buku {{ $key + 1 }}">
                        </div>
                        <h3 class="text-center" style="font-weight: bold">INFORMASI BUKU</h3>
                        <p>Jenis Buku: {{ $buku['jenis_buku'] }}</p>
                        <p>Judul Buku: {{ $buku['judul_buku'] }}</p>
                        <p>Pengarang: {{ $buku['pengarang'] }}</p>
                        <p>Penerbit: {{ $buku['penerbit'] }}</p>
                        <p>Tahun Terbit: {{ $buku['tahun_terbit'] }}</p>
                        <p>ISBN: {{ $buku['isbn'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection

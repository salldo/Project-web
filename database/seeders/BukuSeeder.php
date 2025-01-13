<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'jenis_buku' => 'Komik',
            'judul_buku' => 'solo leveling 3',
            'pengarang' => 'tatsumaki toya',
            'penerbit' => 'tv. jepang',
            'tahun_terbit' => '2024',
            'url_gambar' => 'test.jpg',
            'created_at' => now(),
            'updated_at' =>now()
        ]);
    }
}

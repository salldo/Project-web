<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPinjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_pinjam')->insert([
            'kode_buku' => 3,
            'tgl_kembali' => now(),
            'status_pinjam' => 'di pinjam',
            'created_at' => now(),
            'updated_at' =>now()
        ]);
    }
}

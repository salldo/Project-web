<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anggota')->insert([
            'nama_anggota' => 'Erida',
            'tempat_lahir' => 'purwokerto',
            'tgl_lahir' => now(),
            'gender' => 'perempuan',
            'alamat' => 'jl. afahyah',
            'no_telepon' => '0896378223'
        ]);
    }
}

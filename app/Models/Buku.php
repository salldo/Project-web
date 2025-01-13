<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";

    protected $fillable = [
        'jenis_buku',
        'judul_buku',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'isbn',
        'url_gambar',
    ];
}

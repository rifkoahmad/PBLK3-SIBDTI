<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $lable = "beritas";
    protected $fillable = ['judul','isi','kategori','gambar','tanggal_publikasi'];
}

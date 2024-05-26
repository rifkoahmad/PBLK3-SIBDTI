<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $lable = "barangs";
    protected $fillable = ['kode_barang','nama_barang','kategori','jumlah','posisi','foto'];
}

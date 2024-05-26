<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $lable = "barang_keluars";
    protected $fillable = ['id_barang','jumlah','tanggal_keluar'];
}

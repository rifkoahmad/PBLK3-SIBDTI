<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $lable = "barang_masuks";
    protected $fillable = ['id_barang','jumlah','tanggal_masuk','supplier'];

}

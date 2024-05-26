<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $lable = "peminjamen";
    protected $fillable = ['id_barang','id_peminjam','tanggal_pinjam','tanggal_kembali','status'];
}

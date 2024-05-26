<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $lable = "pengembalians";
    protected $fillable = ['id_barang_pinjam','tanggal_kembali'];
}

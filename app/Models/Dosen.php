<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $lable = "dosens";
    protected $fillable = ['nama','nip','email','jabatan_akademik','no_telepon','foto'];
}

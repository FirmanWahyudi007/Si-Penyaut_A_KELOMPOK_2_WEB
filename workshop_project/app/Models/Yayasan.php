<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yayasan extends Model
{
    use HasFactory;
    protected $table = "yayasan";
    protected $fillable = [
        'nama_yayasan',
        'alamat',
        'no_telp',
        'dokumentasi',
    ];
}

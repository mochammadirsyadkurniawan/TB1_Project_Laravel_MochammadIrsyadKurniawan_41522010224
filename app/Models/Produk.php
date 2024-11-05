<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = ['kode_produk', 'nama_produk', 'deskripsi', 'harga', 'jumlah_produk', 'image', 'created_at', 'updated_at'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan nama default
    protected $table = 'inventories';  // Ganti dengan nama tabel Anda jika berbeda

    // Tentukan kolom-kolom yang dapat diisi
    protected $fillable = ['name', 'quantity', 'price', 'created_at', 'updated_at'];

    // Tentukan kolom yang harus di-cast
    protected $casts = [
        'quantity' => 'integer',
        'price' => 'decimal:2',
    ];


}

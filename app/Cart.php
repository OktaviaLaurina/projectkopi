<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = [
        'user_id',
        'kopi_id',
        'nama_kopi',
        'alamat',
        'pesan',
        'jumlah',
        'total'
    ];
}

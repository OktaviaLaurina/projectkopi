<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $fillable = [
        'kodeResi',
        'id_barang',
        'hargaKopi',
        'jumlah',
        'subTotal'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $primarykey = [
        'Produk_ID',
    ];

    protected $fillable = [
        'Produk_nama',
        'Produk_rincian',
        'Produk_harga',
    ];

    public function productOrders()
    {
        return $this->hasMany('App\Pesanan');
    }
}

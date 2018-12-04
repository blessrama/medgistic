<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    const CREATED_AT = 'Order_TanggalPesan';

    protected $primarykey = [
        'Order_ID',
    ];
    
    protected $fillable = [
        'Order_TotalHarga',
    ];
    
    public function orderUsers()
    {
        return $this->hasMany('App\User');
    }

    public function orderProducts()
    {
        return $this->hasMany('App\Produk');
    }
}

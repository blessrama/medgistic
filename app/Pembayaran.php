    <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    const CREATED_AT = 'Payment_TanggalBayar';
    
    protected $primarykey = [
        'Payment_ID',
    ];
    
    protected $fillable = [
        'Payment_hargaBayar',
        'Payment_metodeBayar',
        'Payment_statusBayar',
        'Produk_harga',
    ];
}

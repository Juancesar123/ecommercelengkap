<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class transaksiPembelian
 * @package App\Models
 * @version April 5, 2020, 10:43 am UTC
 *
 * @property string nama_product
 * @property number quantity
 * @property number ammount
 * @property number price
 */
class transaksiPembelian extends Model
{
    use SoftDeletes;

    public $table = 'transaksi_pembelian';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_id',
        'quantity',
        'amount',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'string',
        'amount' => 'string'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'required',
        'quantity' => 'numeric',
        'amount' => 'numeric',
        'price' => 'numeric|required'
    ];

    
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class product
 * @package App\Models
 * @version March 29, 2020, 6:54 am UTC
 *
 * @property string product_name
 * @property integer stok
 * @property string category
 * @property string brand
 * @property integer price
 * @property string description
 * @property string poto
 */
class product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_name',
        'stok',
        'category',
        'brand',
        'price',
        'description',
        'poto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_name' => 'string',
        'stok' => 'integer',
        'category' => 'string',
        'brand' => 'string',
        'price' => 'integer',
        'description' => 'string',
        'poto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'required',
        'stok' => 'required|numeric',
        'category' => 'required',
        'brand' => 'required',
        'price' => 'required|numeric',
        'description' => 'required',
        'poto' => 'required'
    ];

    
}

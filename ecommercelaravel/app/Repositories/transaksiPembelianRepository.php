<?php

namespace App\Repositories;

use App\Models\transaksiPembelian;
use App\Repositories\BaseRepository;

/**
 * Class transaksiPembelianRepository
 * @package App\Repositories
 * @version April 5, 2020, 10:43 am UTC
*/

class transaksiPembelianRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_product',
        'quantity',
        'ammount',
        'price'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return transaksiPembelian::class;
    }
}

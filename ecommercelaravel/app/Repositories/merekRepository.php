<?php

namespace App\Repositories;

use App\Models\merek;
use App\Repositories\BaseRepository;

/**
 * Class merekRepository
 * @package App\Repositories
 * @version March 29, 2020, 4:28 am UTC
*/

class merekRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return merek::class;
    }
}

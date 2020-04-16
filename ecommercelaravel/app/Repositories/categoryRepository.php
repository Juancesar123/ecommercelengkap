<?php

namespace App\Repositories;

use App\Models\category;
use App\Repositories\BaseRepository;

/**
 * Class categoryRepository
 * @package App\Repositories
 * @version March 29, 2020, 6:48 am UTC
*/

class categoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_name'
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
        return category::class;
    }
}

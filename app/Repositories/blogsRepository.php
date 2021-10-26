<?php

namespace App\Repositories;

use App\Models\blogs;
use App\Repositories\BaseRepository;

/**
 * Class blogsRepository
 * @package App\Repositories
 * @version October 26, 2021, 2:55 pm UTC
*/

class blogsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'blog',
        'author'
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
        return blogs::class;
    }
}

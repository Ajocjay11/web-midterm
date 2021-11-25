<?php

namespace App\Repositories;

use App\Models\Log;
use App\Repositories\BaseRepository;

/**
 * Class LogRepository
 * @package App\Repositories
 * @version November 25, 2021, 12:44 pm UTC
*/

class LogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'log',
        'logdetails',
        'logtype'
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
        return Log::class;
    }
}

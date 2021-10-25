<?php

namespace App\Repositories;

use App\Models\ElectionSurvey;
use App\Repositories\BaseRepository;

/**
 * Class ElectionSurveyRepository
 * @package App\Repositories
 * @version October 25, 2021, 10:28 am UTC
*/

class ElectionSurveyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'president',
        'senator',
        'mayor',
        'congressman',
        'barangay_captain'
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
        return ElectionSurvey::class;
    }
}

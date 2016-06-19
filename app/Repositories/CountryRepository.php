<?php

namespace App\Repositories;

use App\Models\Country;
use InfyOm\Generator\Common\BaseRepository;

class CountryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'capital',
        'citizenship',
        'country_code',
        'currency',
        'currency_code',
        'currency_sub_unit',
        'currency_symbol',
        'full_name',
        'iso_3166_2',
        'iso_3166_3',
        'name',
        'region_code',
        'sub_region_code',
        'eea',
        'calling_code',
        'flag'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Country::class;
    }
}

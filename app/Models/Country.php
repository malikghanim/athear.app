<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Country",
 *      required={"capital", "citizenship", "country_code", "currency", "currency_code", "currency_sub_unit", "currency_symbol", "full_name", "iso_3166_2", "iso_3166_3", "name", "region_code", "sub_region_code", "eea", "calling_code", "flag"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="capital",
 *          description="capital",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="citizenship",
 *          description="citizenship",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="country_code",
 *          description="country_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="currency",
 *          description="currency",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="currency_code",
 *          description="currency_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="currency_sub_unit",
 *          description="currency_sub_unit",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="currency_symbol",
 *          description="currency_symbol",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="full_name",
 *          description="full_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="iso_3166_2",
 *          description="iso_3166_2",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="iso_3166_3",
 *          description="iso_3166_3",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="region_code",
 *          description="region_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sub_region_code",
 *          description="sub_region_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="eea",
 *          description="eea",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="calling_code",
 *          description="calling_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="flag",
 *          description="flag",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Country extends Model
{
    use SoftDeletes;

    public $table = 'countries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'capital' => 'string',
        'citizenship' => 'string',
        'country_code' => 'string',
        'currency' => 'string',
        'currency_code' => 'string',
        'currency_sub_unit' => 'string',
        'currency_symbol' => 'string',
        'full_name' => 'string',
        'iso_3166_2' => 'string',
        'iso_3166_3' => 'string',
        'name' => 'string',
        'region_code' => 'string',
        'sub_region_code' => 'string',
        'eea' => 'boolean',
        'calling_code' => 'string',
        'flag' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'capital' => 'required',
        'citizenship' => 'required',
        'country_code' => 'required',
        'currency' => 'required',
        'currency_code' => 'required',
        'currency_sub_unit' => 'required',
        'currency_symbol' => 'required',
        'full_name' => 'required',
        'iso_3166_2' => 'required',
        'iso_3166_3' => 'required',
        'name' => 'required',
        'region_code' => 'required',
        'sub_region_code' => 'required',
        //'eea' => 'required',
        'calling_code' => 'required',
        'flag' => 'required'
    ];
}

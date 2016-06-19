<?php

use Faker\Factory as Faker;
use App\Models\Country;
use App\Repositories\CountryRepository;

trait MakeCountryTrait
{
    /**
     * Create fake instance of Country and save it in database
     *
     * @param array $countryFields
     * @return Country
     */
    public function makeCountry($countryFields = [])
    {
        /** @var CountryRepository $countryRepo */
        $countryRepo = App::make(CountryRepository::class);
        $theme = $this->fakeCountryData($countryFields);
        return $countryRepo->create($theme);
    }

    /**
     * Get fake instance of Country
     *
     * @param array $countryFields
     * @return Country
     */
    public function fakeCountry($countryFields = [])
    {
        return new Country($this->fakeCountryData($countryFields));
    }

    /**
     * Get fake data of Country
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCountryData($countryFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'capital' => $fake->word,
            'citizenship' => $fake->word,
            'country_code' => $fake->word,
            'currency' => $fake->word,
            'currency_code' => $fake->word,
            'currency_sub_unit' => $fake->word,
            'currency_symbol' => $fake->word,
            'full_name' => $fake->word,
            'iso_3166_2' => $fake->word,
            'iso_3166_3' => $fake->word,
            'name' => $fake->word,
            'region_code' => $fake->word,
            'sub_region_code' => $fake->word,
            'eea' => $fake->word,
            'calling_code' => $fake->word,
            'flag' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $countryFields);
    }
}

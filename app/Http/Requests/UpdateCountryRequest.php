<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Country;

class UpdateCountryRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(!$this->request->get('eea'))
            $this->request->set('eea', '0');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Country::$rules;
    }
}

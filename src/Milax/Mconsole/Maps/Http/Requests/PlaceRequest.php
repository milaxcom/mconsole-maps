<?php

namespace Milax\Mconsole\Maps\Http\Requests;

use App\Http\Requests\Request;

class PlaceRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'web' => 'url',
        ];
    }
}

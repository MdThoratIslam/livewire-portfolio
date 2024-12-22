<?php

namespace App\Http\Requests\Divisions;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDivisionsRequest extends StoreDivisionsRequest
{
    /*
     *  return [
            //
            'en_name'   => ['required', 'string', 'max:255'],
            'bn_name'   => ['required', 'string', 'max:255'],
            'slug'      => ['required', 'string', 'max:255'],
            'lat'       => ['nullable', 'string', 'max:255'],
            'long'      => ['nullable', 'string', 'max:255'],
            'url'       => ['nullable', 'string', 'max:255'],
        ];
    */
    public function rules(){
        $rules = parent::rules();
        $rules['slug'] = 'required|string|max:255|unique:divisions,slug,'.$this->division;
        return $rules;
    }
}

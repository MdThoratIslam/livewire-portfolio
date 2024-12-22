<?php

namespace App\Http\Requests\Divisions;

use Illuminate\Foundation\Http\FormRequest;

class StoreDivisionsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            //
            'en_name'   => ['required', 'string', 'max:255'],
            'bn_name'   => ['required', 'string', 'max:255'],
            'slug'      => ['required', 'string', 'max:255'],
            'lat'       => ['nullable', 'string', 'max:255'],
            'long'      => ['nullable', 'string', 'max:255'],
            'url'       => ['nullable', 'string', 'max:255'],
        ];
    }
}

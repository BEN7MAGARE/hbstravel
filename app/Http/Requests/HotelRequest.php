<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'name' => ['required', 'string','max:50'],
            'description' => ['required', 'string','max:100'],
            'country_code' => ['required', 'string','max:50'],
            'state_code' => ['nullable', 'string','max:50'],
            'destination_code' => ['nullable', 'string','max:50'],
            'zone_code' => ['nullable', 'string','max:50'],
            'longitude' => ['nullable', 'string','max:50'],
            'latitude' => ['nullable', 'string','max:50'],
            'category_code' => ['nullable', 'string','max:50'],
            'category_group_code' => ['nullable', 'string','max:50'],
            'chain_code' => ['nullable', 'string','max:50'],
            'accommodation_type_code' => ['nullable', 'string','max:50'],
            'postal_code' => ['nullable', 'string','max:50'],
            'city' => ['nullable', 'string','max:50'],
            'email' => ['nullable', 'string','max:50'],
            'license' => ['nullable', 'string','max:50'],
            'web' => ['nullable', 'string','max:50'],
            'last_update' => ['nullable', 'string','max:50'],
            's2c' => ['nullable', 'string','max:50'],
            'ranking' => ['nullable', 'string','max:50'],
        ];
    }
}

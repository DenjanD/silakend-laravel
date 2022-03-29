<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'name' => 'required|string',
            'year' => 'required|max:'.date("Y"),
            'tax_date' => 'required|date',
            'valid_date' => 'required|date',
            'license_number' => 'required|string',
            'distance_count' => 'required|integer',
            'vcategory_id' => 'required|exists:vehicle_categories'
        ];
    }
}

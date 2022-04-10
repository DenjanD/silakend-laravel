<?php

namespace App\Http\Requests\Driver;

use Illuminate\Foundation\Http\FormRequest;

class VehicleUsageRequest extends FormRequest
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
            'description' => 'prohibited',
            'personel_count' => 'prohibited',
            'origin' => 'prohibited',
            'destination' => 'prohibited',
            'departure' => 'nullable',
            'arrival' => 'prohibited',
            'status' => 'required|in:ONGOING',
            'distance_count_out' => 'required',
            'distance_count_in' => 'prohibited',
            'status_description' => 'prohibited',
            'vehicle_id' => 'prohibited',
            'driver_id' => 'prohibited',
            'acceptor_id' => 'prohibited',
            'user_id' => 'prohibited',
            'ucategory_id' => 'prohibited',
        ];
    }
}
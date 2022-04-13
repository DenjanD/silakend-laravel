<?php

namespace App\Http\Requests;

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
            'description' => 'required|string',
            'personel_count' => 'required|integer|min:0',
            'origin' => 'required',
            'destination' => 'required',
            'departure' => 'nullable',
            'arrival' => 'nullable',
            'status' => 'required',
            'distance_count_out' => 'required|integer|min:0',
            'distance_count_in' => 'required|integer|min:0',
            'status_description' => 'nullable',
            'vehicle_id' => 'nullable|exists:vehicles',
            'driver_id' => 'nullable|exists:users,user_id',
            'acceptor_id' => 'nullable|exists:users,user_id',
            'user_id' => 'required|exists:users',
            'ucategory_id' => 'required|exists:usage_categories',
            'officer_id' => 'required'
        ];
    }
}

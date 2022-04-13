<?php

namespace App\Http\Requests\UnitHead;

use Illuminate\Foundation\Http\FormRequest;

class VehicleUsageStoreRequest extends FormRequest
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
            'departure' => 'prohibited',
            'arrival' => 'prohibited',
            'status' => 'required|in:ACCEPTED,CANCELED',
            'distance_count_out' => 'prohibited',
            'distance_count_in' => 'prohibited',
            'status_description' => 'prohibited',
            'vehicle_id' => 'prohibited',
            'driver_id' => 'prohibited',
            'acceptor_id' => 'required',
            'user_id' => 'required|exists:users',
            'ucategory_id' => 'required|exists:usage_categories',
            'officer_id' => 'prohibited'
        ];
    }
}

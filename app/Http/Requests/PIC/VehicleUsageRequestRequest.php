<?php

namespace App\Http\Requests\PIC;

use Illuminate\Foundation\Http\FormRequest;

class VehicleUsageRequestRequest extends FormRequest
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
            'departure' => 'prohibited',
            'arrival' => 'prohibited',
            'status' => 'required|in:READY,REJECTED',
            'distance_count_out' => 'prohibited',
            'distance_count_in' => 'prohibited',
            'status_description' => 'nullable',
            'vehicle_id' => 'nullable',
            'driver_id' => 'nullable',
            'acceptor_id' => 'prohibited',
            'user_id' => 'prohibited',
            'ucategory_id' => 'prohibited',
            'officer_id' => 'prohibited'
        ];
    }
}

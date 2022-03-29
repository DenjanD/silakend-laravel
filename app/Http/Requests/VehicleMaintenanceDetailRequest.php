<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleMaintenanceDetailRequest extends FormRequest
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
            'item_name' => 'required|string',
            'item_qty' => 'required|integer|min:0',
            'item_unit' => 'required|string',
            'item_price' => 'required|integer|min:0',
            'price_total' => 'required|integer|min:0',
            'maintenance_id' => 'required|exists:vehicle_maintenances'
        ];
    }
}

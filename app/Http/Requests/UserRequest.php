<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nip' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'role_id' => 'required',
            'unit_id' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password'  => 'required|min:8|confirmed',
        ];
    }
}

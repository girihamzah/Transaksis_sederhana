<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:6',
            'email' => 'required|email|unique',
            'phone' => 'required|numeric',
            'address' => 'required',
        ];
    }
    public function massages()
    {
        return [
            'name.required' => 'Product name cannot be null',
        ];
    }
}

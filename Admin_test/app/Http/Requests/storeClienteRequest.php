<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'CC' => 'required',
            'name' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'email' => 'required',
            'status' => 'required',
        ];
    }
}

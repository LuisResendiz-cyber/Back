<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;

class StoreCurso extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required', 
            'Customer_name' => 'required', 
            'Location' => 'required', 
            'Date' => 'required',
            'Status' => 'required', 
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'El :attribute es obligatorio.',
        'Customer_name.required' => 'Añade un :attribute al producto',
        'Location.required' => 'El :attribute es obligatorio.',
        'Date.required' => 'El :attribute es obligatorio.',
        'Status.required' => 'El :attribute es obligatorio.'
    ];
}
}

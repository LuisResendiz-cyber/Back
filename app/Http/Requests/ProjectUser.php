<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUser extends FormRequest
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
            'name' => 'required | max: 40 | min: 10' 
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'name.max' => 'El :attribute No debe de contener mas de 25 caracteres.',
            'name.min' => 'El :attribute debe de contener mas de 10 caracteres.'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectTareas extends FormRequest
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
            'Element_id' => 'required', 
            'Pendiente'=> 'required', 
            'status' => 'required',
            'Element_Step' => 'required'
        ];
    }

    public function messages()
{
    return [
        'Element_id.required' => 'El :attribute es obligatorio.',
        'Pendiente.required' => 'Añade un :attribute es obligatorio.', 
        'status.required' => 'Añade un :attribute es obligatorio.', 
        'Element_Step' => 'Añade un :attribute es obligatorio.',
    ];
}



}

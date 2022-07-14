<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectImageUp extends FormRequest
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
            'image_link' => 'required|image|mimes:jpeg,png,svg|max:1024',
            'status' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'Element_id.required' => 'El :attribute es obligatorio.',
            'image_link.required' => 'Añade una :attribute',
            'status.required' => 'Añade un :attribute'
        ];
    }
}

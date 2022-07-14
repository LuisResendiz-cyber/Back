<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectElements extends FormRequest
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
            'System' => 'required', 
            'PyID' => 'required',
            'Line_Equipment' => 'required',
            'Service' => 'required',
            'Area' => 'required',
            'Tag' => 'required',
            'Num' => 'required',
            'Step_1' => 'required',
            'Step_2' => 'required',
            'Step_3' => 'required',
            'Step_4' => 'required',
            'Step_5' => 'required',
            'Progress' => 'required',
            'Instrument_type' => 'required',
            'project_id' => 'required',
        ];
    }

}

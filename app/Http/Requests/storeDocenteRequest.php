<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeDocenteRequest extends FormRequest
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
            'nombre'=>'required|max:25',
            'apellido'=>'required|max:40',
            'edad'=>'required|integer',
            'fecha'=>'required|date',
            'foto'=>'required|mimes:jpg,png|max:5mb',
            'documento'=>'required|mimes:pdf'
        ];
    }
}

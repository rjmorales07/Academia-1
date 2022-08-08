<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCursoRequest extends FormRequest
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
                'nombre'=>'required|size:15',
                'descripcion'=>'email:rfc,dns',
                'duracion'=>'integer|min:1',
                'imagen'=>'Mimetypes:mp4'

                // 'imagen'=>'dimensions:max_width=500,max_height=500'

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
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
            'user'=>['required','min:5'],
            'password'=>['required','comfirmed'],
            'nombre_completo'=>['required','min:2'],
            'correo'=>['required','email'],
            'fecha_nac'=>['required','date'],
            'genero'=>['required']
        ];
    }

    public function messages(){
      
    }
}

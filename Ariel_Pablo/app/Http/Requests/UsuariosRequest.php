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
      return  [
          'user.required'=>'Indique su usuario',
          'user.min'=>'El usuario es demasiado corto',
          'password.required'=>'Indique su contraseña',
          'password.comfirmed'=>'Las contraseñas no coiciden',
          'correo.required'=>'Indique su correo',
          'correo.email'=>'El formato del correo no es correcto',
          'nombre_completo.required'=>'Indique su nombre',
          'genero.required'=>'Indique su genero'
        ];
    }
}

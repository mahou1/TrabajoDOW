<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MayorEdad;
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
            'user'=>['required','min:5','unique:usuarios,user'],
            'password'=>['required','confirmed'],
            'nombre_completo'=>['required','min:2'],
            'password_confirmation'=>['required'],
            'correo'=>['required','email','unique:usuarios,correo'],
            'fecha_nac'=>['required','date',new MayorEdad],
            'genero'=>['required']
        ];
    }

    public function messages(){
      return  [
          'user.required'=>'Indique su usuario',
          'user.min'=>'El usuario es demasiado corto',
          'user.unique'=>'El nombre de usuario ya esta tomado',
          'password.required'=>'Indique su contraseña',
          'password.confirmed'=>'Las contraseñas no coiciden',
          'correo.required'=>'Indique su correo',
          'correo.email'=>'El formato del correo no es correcto',
          'correo.unique'=>'El correo ya esta tomado',
          'nombre_completo.required'=>'Indique su nombre',
          'genero.required'=>'Indique su genero',

          'password_confirmation.required'=>'Reingrese su contraseña',
          'fecha_nac.required'=>'Indique su fecha de nacimiento'
        ];
    }
}

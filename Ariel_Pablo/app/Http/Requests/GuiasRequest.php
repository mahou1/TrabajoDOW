<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuiasRequest extends FormRequest
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
          'nombre' => ['required','min:3','max:45'],
          'telefono' => ['required','numeric'],
          'correo' => ['required','email'],
          'descripcion' => ['required','min:10',]
        ];
    }
    public function messages(){
      return[
        'nombre.required' => 'Indique nombre de Guia',
        'nombre.min'=>'Nombre demasiado corto',
        'nombre.max'=>'Nombre demasiado largo',
        'telefono.required' => 'Indique un telefono',
        'telefono.numeric'=>'El telefono solo puede tener numeros',
        'correo.required' => 'Indique un correo',
        'correo.email'=>'Indique un correo valido',
        'descripcion.required' => 'Indique una descripcion',
        'descripcion.min'=>'Descripcion demasiada corta'
      ];
    }
}

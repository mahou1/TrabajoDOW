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
          'nombre' => ['required'],
          'telefono' => ['required','max:15'],
          'correo' => ['required'],
          'descripcion' => ['required']
        ];
    }
    public function messages(){
      return[
        'nombre.required' => 'Indique nombre de Guia',
        'telefono.required' => 'Indique un telefono',
        'correo.required' => 'Indique un correo',
        'descripcion.required' => 'Indique una descripcion'
      ];
    }
}

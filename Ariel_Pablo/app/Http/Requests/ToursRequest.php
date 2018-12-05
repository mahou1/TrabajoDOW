<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToursRequest extends FormRequest
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
            'nombre'=>['required'],
            'descripcion'=>['required'],
            'idUbicacion'=>['required'],
            'duracion'=>['required'],
            'max_personas'=>['required'],
            'precio'=>['required'],
            'imagen'=>['required']
        ];
    }

    public function messages(){
      return [
        'nombre.required'=>'Indique el nombre del Tour',
        'descripcion.required'=>'Indique la descripcion del Tour',
        'idUbicacion.required'=>'Indique la ubicacion donde se realizara',
        'duracion.required'=>'Indique la duracion',
        'max_personas.required'=>'Indique la cantidad maxima de participantes',
        'precio.required'=>'Indique el precio del Tour',
        'imagen.required'=>'Agrege una Imagen al Tour'
      ];

    }
}

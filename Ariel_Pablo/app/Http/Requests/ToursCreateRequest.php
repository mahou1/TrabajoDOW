<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ToursCreateRequest extends FormRequest
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
            'nombre'=>['required','unique:tours,nombre'],
            'descripcion'=>['required'],
            'idUbicacion'=>['required','numeric'],
            'duracion'=>['required'],
            'max_personas'=>['required','numeric'],
            'precio'=>['required'],
            'imagen'=>['required']
        ];
    }

    public function messages(){
      return [
        'nombre.required'=>'Indique el nombre del Tour',
        'nombre.unique'=>'Nombre del tour ya existe',
        'descripcion.required'=>'Indique la descripcion del Tour',
        'idUbicacion.required'=>'Indique la ubicacion',
        'idUbicacion.numeric'=>'Selecione una ubicacion valida',
        'duracion.required'=>'Indique la duracion',
        'max_personas.required'=>'Indique la cantidad maxima de participantes',
        'max_personas.numeric'=>'Cantidad de participantes invalida',
        'precio.required'=>'Indique el precio del Tour',
        'imagen.required'=>'Agrege una Imagen al Tour'
      ];

    }
}

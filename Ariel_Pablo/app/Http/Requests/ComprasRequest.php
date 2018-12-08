<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComprasRequest extends FormRequest
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
            'fecha'=>['required'],
            'cant_participantes'=>['required','min:1']
        ];
    }

    public function messages(){
      return[
        'fecha.required'=>'Indique una fecha de reserva',
        'cant_participantes.required'=>'Indique la cantidad de participantes',
        'cant_participantes.required'=>'Cantidad minima 1'
      ];
    }
}

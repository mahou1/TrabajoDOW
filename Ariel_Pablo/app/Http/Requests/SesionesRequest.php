<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
 use App\Rules\FechaSesionRule;
class SesionesRequest extends FormRequest
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
            'idTour'=>['required','numeric'],
            'fecha'=>['required',new FechaSesionRule]
        ];
    }
    public function messages(){
      return[
        'idTour.required'=>'Indique el Tour',
        'idTour.numeric'=>'Indique el tour',
        'fecha.required'=>'Indique la fecha'
      ];
    }
}

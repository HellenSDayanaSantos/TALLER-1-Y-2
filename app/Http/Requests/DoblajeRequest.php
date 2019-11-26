<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoblajeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'nombre' => 'required|alpha|min:2'
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre Doblaje'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo es obligatorio = :attibute',
            'min' =>  'Este campo debe tener :min caracteres como minimo = :attribute',
            'alpha' => 'Este campo no debe tener numeros = :attribute ',
        ];
    }


}

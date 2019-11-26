<?php

namespace App\Http\Requests;

use App\Rules\ContenerMayuscula;
use Illuminate\Foundation\Http\FormRequest;

class PeliculaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'titulo' =>  'required|min:5',
            'sipnosis' =>  ['required','string', new ContenerMayuscula],
            'puntuacion' =>  'required|integer',
            'doblaje_id' => 'required|integer',
        ];
    }

    public function attributes()
    {
        return [
            'titulo' => 'Pelicula',
            'doblaje_id' => 'Doblaje'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo es obligatorio = :attibute',
            'min' =>  'Este campo debe tener :min caracteres como minimo = :attribute',
            'string' => 'Este campo debe ser texto = :attribute ',
            'integer' => 'Este campo es numerico = :attribute',
        ];
    }

}

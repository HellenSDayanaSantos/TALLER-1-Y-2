<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ContenerMayuscula implements Rule
{
    public function passes($attribute, $value)
    {
        return  $uppercase = preg_match('@[A-Z]@', $value);
    }

    public function message()
    {
        return 'Este atributo debe contener Mayusculas = :attribute.';
    }
    
}

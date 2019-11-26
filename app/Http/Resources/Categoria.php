<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Categoria extends JsonResource
{

    public function toArray($request)
    {
        return [
            'nombre' => $this->nombre,
            'pelicula_id' => new Pelicula($this->pelicula),    
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Doblaje extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'nombre' => $this->nombre,
            'peliculas' => Pelicula::collection($this->peliculas),
            'categorias' => $this->categorias,
        ];
    }
}

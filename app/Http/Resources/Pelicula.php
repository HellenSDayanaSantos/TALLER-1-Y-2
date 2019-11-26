<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pelicula extends JsonResource
{

    public function toArray($request)
    {
        return [
            'titulo' => $this->titulo,
            'sipnosis' => $this->sipnosis,
        ];
    }
}

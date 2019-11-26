<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Doblaje as DoblajeResource;
use App\Http\Resources\Categoria as CategoriaResource;
use App\Models\Categoria;
use App\Models\Doblaje;

class PeliculaController extends Controller
{
    public function index()
    {
        $doblajes = Doblaje::all();
        return DoblajeResource::collection($doblajes);
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        return new CategoriaResource($categoria);
    }
}

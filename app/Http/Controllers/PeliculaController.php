<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeliculaRequest;
use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function store(PeliculaRequest $request)
    {
        $pelicula = Pelicula::create($request->all());

        return $pelicula;
    }
}

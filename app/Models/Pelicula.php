<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';

    protected $fillable = [
        'titulo',
        'sipnosis',
        'puntuacion',
        'doblaje_id',
    ];

    public function doblaje()
    {
        return $this->belongsTo('App\Models\Doblaje');
    }

    public function categorias()
    {
        return $this->hasMany('App\Models\Categoria');
    }

   
}

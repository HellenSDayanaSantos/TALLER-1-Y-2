<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoblajeRequest;
use App\Models\Doblaje;

class DoblajeController extends Controller
{
    public function index()
    {
       
       return csrf_token();
    }

    public function store(DoblajeRequest $request)
    {
        $doblaje = Doblaje::create($request->all());

        return $doblaje;
    }

    
}

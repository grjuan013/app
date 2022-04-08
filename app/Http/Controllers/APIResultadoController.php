<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resultado;
use Illuminate\Support\Facades\DB;

class APIResultadoController extends Controller
{
    public function show($id)
    {
        $resultado = Resultado::findOrFail($id);
        return \response($resultado);
    }

    public function create()
    {
        //
    }
}

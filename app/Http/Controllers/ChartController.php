<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('grafica');
    }

    public function getUsersInfo()
    {
        $resultados = Auth::user()->resultados;
        // dd($resultados);
        foreach ($resultados as $resultado){
            $puntos[] = ['fecha' => $resultado['fecha'], 'y' => floatval($resultado['total'])];
        }
        return view('grafica', ["data" => json_encode($puntos)]);
    }
    
}

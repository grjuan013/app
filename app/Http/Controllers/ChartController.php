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
            $puntosA[] = ['fecha' => $resultado['fecha'], 'y' => floatval($resultado['alimentacion'])];
            $puntosT[] = ['fecha' => $resultado['fecha'], 'y' => floatval($resultado['transporte'])];
            $puntosV[] = ['fecha' => $resultado['fecha'], 'y' => floatval($resultado['vivienda'])];
        }
        return view('grafica', ["data" => json_encode($puntos),"dataA"=>json_encode($puntosA),"dataT"=>json_encode($puntosT),"dataV"=>json_encode($puntosV)]);
    }

    // public function getUsersInfoA()
    // {
    //     $resultados = Auth::user()->resultados;
    //     // dd($resultados);
    //     foreach ($resultados as $resultado){
    //         $puntos[] = ['fecha' => $resultado['fecha'], 'y' => floatval($resultado['alimentacion'])];
    //     }
    //     return view('grafica', ["dataA" => json_encode($puntos)]);
    // }
    
}

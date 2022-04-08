<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Resultado;

class FormController extends Controller
{
    //
    public function postCreate(Request $request)
    {
        $resultado = new Resultado;

        $personas               = $request->input('numPersonas');
        $promEner               = $request->input('promEner');
        $gasNatural             = $request->input('gasNatural');
        $glp                    = $request->input('glp');
        $carbon                 = $request->input('carbon');
        $lenia                  = $request->input('lenia');
        $avion                  = $request->input('avion');
        $transportePublico      = $request->input('transporte');
        $taxi                   = $request->input('taxi');
        $combustible            = $request->input('combustible');
        $combTanqueado          = $request->input('combTanqueado');
        $promPersonas           = $request->input('promPersonas');
        $cantCarnR              = $request->input('cantCarnR');
        $frecCarnR              = $request->input('frecCarnR');
        $cantCarnCord           = $request->input('cantCarnCord');
        $frecCarnCord           = $request->input('frecCarnCord');
        $cantCerd               = $request->input('cantCerd');
        $frecCerd               = $request->input('frecCerd');
        $cantPollo              = $request->input('cantPollo');
        $frecPollo              = $request->input('frecPollo');
        $cantQueso              = $request->input('cantQueso');
        $frecQueso              = $request->input('frecQueso');
        $cantYog                = $request->input('cantYog');
        $frecYog                = $request->input('frecYog');
        $cantHuevos             = $request->input('cantHuevos');
        $frecHuevos             = $request->input('frecHuevos');
        $cantAtun               = $request->input('cantAtun');
        $frecAtun               = $request->input('frecAtun');
        $cantLeche              = $request->input('cantLeche');
        $frecLeche              = $request->input('frecLeche');

        $id = $request->user()->id;

        $vivienda       = $personas*($promEner*164.38 + $gasNatural*60 + $glp*2.96 + $carbon*2.30 + $lenia*0.75);

        $transporte     = $avion*0.285 + $transportePublico*0.0284 + $taxi*0.1002 + $combustible*$combTanqueado*$promPersonas;

        $alimentacion   = $cantCarnR*$frecCarnR*(27000/10000)+$cantCarnCord*$frecCarnCord*(39200/10000)+$cantCerd*$frecCerd*(3471.3/10000)+$cantPollo*$frecPollo*(35000/10000)+$cantQueso*$frecQueso*(9800/10000)+$cantYog*$frecYog*(1250/10000)+$cantHuevos*$frecHuevos*(31000/10000)+$cantAtun*$frecAtun*(5000/10000)+$cantLeche*$frecLeche*(2500/10000);
        
        $total          = $vivienda + $transporte + $alimentacion;

        $resultado->id_usuario = $id;
        $resultado->vivienda = $vivienda;
        $resultado->alimentacion = $alimentacion;
        $resultado->transporte = $transporte;
        $resultado->total = $total;

        $resultado->save();

        // $resultado->create(['transporte'=>$transporte,'vivienda'=>$vivienda,'alimentacion'=>$alimentacion,'total'=>$total]);

        return  view('/formulario');
    }
}

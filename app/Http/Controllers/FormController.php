<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Resultado;
use Alert;

use Response;

class FormController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function postCreate(Request $request)
    {
        $resultado = new Resultado;

        $fecha                  = $request->input('fechaFormulario');
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

        $vivienda       = (int)$personas*((int)$promEner*164.38 + (int)$gasNatural*60 + (int)$glp*2.96 + (int)$carbon*2.30 + (int)$lenia*0.75);

        $transporte     = (int)$avion*0.285 + (int)$transportePublico*0.0284 + (int)$taxi*0.1002 + (int)$combustible*(int)$combTanqueado*(int)$promPersonas;

        $alimentacion   = (int)$cantCarnR*(int)$frecCarnR*(27000/10000)+(int)$cantCarnCord*(int)$frecCarnCord*(39200/10000)+(int)$cantCerd*(int)$frecCerd*(3471.3/10000)+(int)$cantPollo*(int)$frecPollo*(35000/10000)+(int)$cantQueso*(int)$frecQueso*(9800/10000)+(int)$cantYog*(int)$frecYog*(1250/10000)+(int)$cantHuevos*(int)$frecHuevos*(31000/10000)+(int)$cantAtun*(int)$frecAtun*(5000/10000)+(int)$cantLeche*(int)$frecLeche*(2500/10000);

        $total          = $vivienda + $transporte + $alimentacion;

        $resultado->id_usuario = $id;
        $resultado->fecha = $fecha;
        $resultado->vivienda = $vivienda;
        $resultado->alimentacion = $alimentacion;
        $resultado->transporte = $transporte;
        $resultado->total = $total;

        $resultado->save();

        // $resultado->create(['transporte'=>$transporte,'vivienda'=>$vivienda,'alimentacion'=>$alimentacion,'total'=>$total]);

        Alert::success('Correcto', 'Se ha enviado un nuevo resultado.');
        return  redirect('/formulario/grafica');
    }

}


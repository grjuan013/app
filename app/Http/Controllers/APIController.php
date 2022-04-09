<?php

namespace App\Http\Controllers;
use App\Models\Resultado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ResultadoResource;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultados =  Resultado::all();
        return response()->json([ResultadoResource::collection($resultados), 'Resultados Obtenidos.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Resultado();
        $p->id_resultado = $request->id_resultado;
        $p->id_usuario =  ($request->id_usuario);
        $p->transporte = $request->transporte;
        $p->vivienda = $request->vivienda;
        $p->alimentacion = $request->alimentacion;
        $p->total = $request->total;
        $p->created_at = $request->created_at;
        $p->updated_at = $request->updated_at;
        $p->fecha = $request->fecha;
        $result = $p->save();
        return response('Resultado añadido',201);
    }

    public function edit(Request $request,$id)
    {
        $p = Resultado::find($id);
        $p->id_resultado = $request->id_resultado;
        $p->id_usuario =  ($request->id_usuario);
        $p->transporte = $request->transporte;
        $p->vivienda = $request->vivienda;
        $p->alimentacion = $request->alimentacion;
        $p->total = $request->total;
        $p->fecha = $request->fecha;
        $result = $p->save();
        return response('Resultado editado',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_resultado)
    {
        $resultados =  Resultado::findOrFail($id_resultado);
        if (is_null($resultados)) {
            return response()->json('Data not found', 404);
        }
        return response()->json([new ResultadoResource($resultados)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $p = Resultado::find($id);
        $p->id_resultado = $request->id_resultado;
        $p->id_usuario =  ($request->id_usuario);
        $p->transporte = $request->transporte;
        $p->vivienda = $request->vivienda;
        $p->alimentacion = $request->alimentacion;
        $p->total = $request->total;
        $p->fecha = $request->fecha;
        $result = $p->save();
        return response('Resultado editado',201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id_resultado)
    {
        DB::delete('delete from resultados where id_resultado = ?', [$id_resultado]);
        return response('Resultado eliminado',201);
    }
}

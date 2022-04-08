@extends('layouts.app')

@section('content')
<div class="container" style="margin-left: 15%;">
    <div class="row justify-content-center" style="border-style:solid;border-color: #d9d9d9;border-radius: 10px;background-color:white; width: 80%;padding: 10px;">    
        <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
        <img src="/images/huella2.jpg" style="width:50%">
        <form class="form-inline" method="post" action="/formulario">
            {{method_field('POST')}}
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="fechaFormulario" class="col-sm-4 col-col-sm-4 col-form-label">Por favor ingrese la fecha de hoy (?</label>
                <div class="col-sm-8"><input value="0" type="date" class="form-control" aria-describedby="emailHelp" style="margin: 5px;" name="fechaFormulario"></div>
            </div>
            <h5><b>Vivienda</b></h5>
            <div class="form-group row">
                <label for="numPersonas" class="col-sm-4 col-col-sm-4 col-form-label">¿Cuántas personas viven en tu hogar?</label>
                <div class="col-sm-8"><input value="0" type="number" class="form-control" aria-describedby="emailHelp" style="margin: 5px;" name="numPersonas"></div>
                <label for="promEner" class="col-sm-4 col-form-label">¿Cuál es el promedio mensual de energía en tu hogar (kWh/mes)?</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="promEner" aria-describedby="emailHelp" style="margin: 5px;"></div>
            </div>
            <p>Indica el consumo de los siguientes combustibles en tu hogar (coloca 0 en aquellos que no utilices)</p>
            <div class="form-group row">
                <label for="gasNatural" class="col-sm-4 col-form-label">Gas Natural (m3/mes)</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="gasNatural" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="glp" class="col-sm-4 col-form-label">GLP (kg/mes)</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="glp" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="carbon" class="col-sm-4 col-form-label">Carbón (kg/mes)</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="carbon" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="lenia" class="col-sm-4 col-form-label">Leña (kg/mes)</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="lenia" aria-describedby="emailHelp" style="margin: 5px;"></div>
            </div>
            <h5><b>Transporte</b></h5>
            <p>Indica cuántos kilómetros recorriste aproximadamente en cada uno de los siguientes medios de transporte</p>
            <div class="form-group row">
                <label for="avion" class="col-sm-4 col-form-label">Avión(km/mes)</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="avion" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="transporte" class="col-sm-4 col-form-label">Transporte Público: (km/mes)</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="transporte" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="taxi" class="col-sm-4 col-form-label">Taxi: (km/mes)</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="taxi" aria-describedby="emailHelp" style="margin: 5px;"></div>
            </div>
            <p>Indica cuánto combustible has cargado a tu vehículo personal</p>
            <div class="form-group row">
                <label for="combustible" class="col-sm-4 col-form-label">Tipo Combustible:</label>
                <div class="col-sm-8"><select class="form-select" aria-label="Default select example" name="combustible" style="margin: 5px;">
                    <option selected value="0">No aplica</option>
                    <option value="2,65">Diesel (gal)</option>
                    <option value="2.37">Gasolina (gal)</option>
                    <option value="1.665">GNV (m3)</option>
                </select></div>
                <label for="combTanqueado" class="col-sm-4 col-form-label" >Combustible tanqueado (mes)</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="combTanqueado" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="promPersonas" class="col-sm-4 col-form-label">Promedio de personas transportadas (personas/viaje)</label>
                 <div class="col-sm-8"><input value="0" type="number" class="form-control" name="promPersonas" aria-describedby="emailHelp" style="margin: 5px;"></div>
            </div>
            <h5><b>Alimentación</b></h5>
            <div style="margin-right:10%;border-radius:10px;">
                <table class="table table-striped" style="width:80%;border: 1px solid black;border-radius:10px;">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Alimento</th>
                        <th scope="col">Cantidad (gr/día)</th>
                        <th scope="col">Frecuencia (No. días a la semana)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Carne de Res</td>
                        <td><input value="0" type="number" class="form-control" name="cantCarnR" aria-describedby="emailHelp"></td>
                        <td><input value="0" type="number" class="form-control" name="frecCarnR" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Carne de Cordero</td>
                        <td><input value="0" type="number" class="form-control" name="cantCarnCord" aria-describedby="emailHelp"></td>
                        <td><input value="0" type="number" class="form-control" name="frecCarnCord" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Cerdo</td>
                        <td><input value="0" type="number" class="form-control" name="cantCerd" aria-describedby="emailHelp"></td>
                        <td><input value="0" type="number" class="form-control" name="frecCerd" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td>Pollo</td>
                        <td><input value="0" type="number" class="form-control" name="cantPollo" aria-describedby="emailHelp"></td>
                        <td><input value="0" type="number" class="form-control" name="frecPollo" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">5</th>
                        <td>Queso</td>
                        <td><input value="0" type="number" class="form-control" name="cantQueso" aria-describedby="emailHelp"></td>
                        <td><input value="0" type="number" class="form-control" name="frecQueso" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">6</th>
                        <td>Yogurth</td>
                        <td><input value="0" type="number" class="form-control" name="cantYog" aria-describedby="emailHelp"></td>
                        <td><input value="0" type="number" class="form-control" name="frecYog" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">7</th>
                        <td>Huevos</td>
                        <td><input value="0" type="number" class="form-control" name="cantHuevos" aria-describedby="emailHelp"></td>
                        <td><input value="0" type="number" class="form-control" name="frecHuevos" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">8</th>
                        <td>Atún Enlatado</td>
                        <td><input value="0" type="number" class="form-control" name="cantAtun" aria-describedby="emailHelp"></td>
                        <td><input value="0" type="number" class="form-control" name="frecAtun" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">9</th>
                        <td>Leche</td>
                        <td><input value="0" type="number" class="form-control" name="cantLeche" aria-describedby="emailHelp"></td>
                        <td><input value="0" type="number" class="form-control" name="frecLeche" aria-describedby="emailHelp"></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <button class="formButton" type="submit" onclick="location='/formulario/grafica'">
                <span>Calcular</span>
            </button>
            <!-- <input type="submit" value="enviar"> -->
        </form>
        <!-- <div class="vivienda">
            <h5>Vivienda</h5>
            <form action=""></form>
        </div>
        <div class="transporte">
            
        </div>
        <div class="alimentacion">
            
        </div> -->
            
    </div>
</div>
@endsection
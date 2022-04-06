@extends('layouts.app')

@section('content')
<div class="container" style="margin-left: 15%;">
    <div class="row justify-content-center" style="border-style:solid;border-color: #d9d9d9;border-radius: 10px;background-color:white; width: 80%;padding: 10px;">    
        <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
        <img src="/images/huella2.jpg" style="width:50%">
        <form class="form-inline">
            <h5><b>Vivienda</b></h5>
            <div class="form-group row">
                <label for="numPersonas" class="col-sm-4 col-col-sm-4 col-form-label">¿Cuántas personas viven en tu hogar?</label>
                <div class="col-sm-8"><input type="number" class="form-control" id="numPersonas" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="promEner" class="col-sm-4 col-form-label">¿Cuál es el promedio mensual de energía en tu hogar (kWh/mes)?</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="promEner" aria-describedby="emailHelp" style="margin: 5px;"></div>
            </div>
            <p>Indica el consumo de los siguientes combustibles en tu hogar (coloca 0 en aquellos que no utilices)</p>
            <div class="form-group row">
                <label for="gasNatural" class="col-sm-4 col-form-label">Gas Natural (m3/mes)</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="gasNatural" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="glp" class="col-sm-4 col-form-label">GLP (kg/mes)</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="glp" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="carbon" class="col-sm-4 col-form-label">Carbón (kg/mes)</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="carbon" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="lenia" class="col-sm-4 col-form-label">Leña (kg/mes)</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="lenia" aria-describedby="emailHelp" style="margin: 5px;"></div>
            </div>
            <h5><b>Transporte</b></h5>
            <p>Indica cuántos kilómetros recorriste aproximadamente en cada uno de los siguientes medios de transporte</p>
            <div class="form-group row">
                <label for="avion" class="col-sm-4 col-form-label">Avión(km/año)</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="avion" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="transporte" class="col-sm-4 col-form-label">Transporte Público: (km/año)</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="transporte" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="taxi" class="col-sm-4 col-form-label">Taxi: (km/año)</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="taxi" aria-describedby="emailHelp" style="margin: 5px;"></div>
            </div>
            <p>Indica cuánto combustible has cargado a tu vehículo personal</p>
            <div class="form-group row">
                <label for="combustible" class="col-sm-4 col-form-label">Tipo Combustible:</label>
                <div class="col-sm-8"><select class="form-select" aria-label="Default select example" name="combustible" style="margin: 5px;">
                    <option selected>No aplica</option>
                    <option value="1">Diesel (gal)</option>
                    <option value="2">Gasolina (gal)</option>
                    <option value="3">GNV (m3)</option>
                </select></div>
                <label for="combTanqueado" class="col-sm-4 col-form-label" >Transporte Público: (km/año)</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="combTanqueado" aria-describedby="emailHelp" style="margin: 5px;"></div>
                <label for="promPersonas" class="col-sm-4 col-form-label">Taxi: (km/año)</label>
                 <div class="col-sm-8"><input type="number" class="form-control" id="promPersonas" aria-describedby="emailHelp" style="margin: 5px;"></div>
            </div>
            <h5><b>Alimentación</b></h5>
            <div style="margin-right:10%;border-radius:10px;">
                <table class="table table-striped" style="width:80%;border: 1px solid black;border-radius:10px;">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Alimento</th>
                        <th scope="col">Cantidad (gr/dia)</th>
                        <th scope="col">Frecuencia (No. días a la semana)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Carne de Res</td>
                        <td><input type="number" class="form-control" id="cantCarnR" aria-describedby="emailHelp"></td>
                        <td><input type="number" class="form-control" id="frecCarnR" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Carne de Cordero</td>
                        <td><input type="number" class="form-control" id="cantCarnCord" aria-describedby="emailHelp"></td>
                        <td><input type="number" class="form-control" id="frecCarnCord" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Cerdo</td>
                        <td><input type="number" class="form-control" id="cantCerd" aria-describedby="emailHelp"></td>
                        <td><input type="number" class="form-control" id="frecCerd" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td>Pollo</td>
                        <td><input type="number" class="form-control" id="cantPollo" aria-describedby="emailHelp"></td>
                        <td><input type="number" class="form-control" id="frecPollo" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">5</th>
                        <td>Queso</td>
                        <td><input type="number" class="form-control" id="cantQueso" aria-describedby="emailHelp"></td>
                        <td><input type="number" class="form-control" id="frecQueso" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">6</th>
                        <td>Yogurth</td>
                        <td><input type="number" class="form-control" id="cantYog" aria-describedby="emailHelp"></td>
                        <td><input type="number" class="form-control" id="frecYog" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">7</th>
                        <td>Huevos</td>
                        <td><input type="number" class="form-control" id="cantHuevos" aria-describedby="emailHelp"></td>
                        <td><input type="number" class="form-control" id="frecHuevos" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">8</th>
                        <td>Atún Enlatado</td>
                        <td><input type="number" class="form-control" id="cantAtun" aria-describedby="emailHelp"></td>
                        <td><input type="number" class="form-control" id="frecAtun" aria-describedby="emailHelp"></td>
                        </tr>
                        <tr>
                        <th scope="row">9</th>
                        <td>Leche</td>
                        <td><input type="number" class="form-control" id="cantLeche" aria-describedby="emailHelp"></td>
                        <td><input type="number" class="form-control" id="frecLeche" aria-describedby="emailHelp"></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <button class="formButton">
                <span>Calcular</span>
            </button>
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
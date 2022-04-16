@extends('layouts.app')

@section('content')
<div class="container" style="margin-left: 15%;">
    <div class="row justify-content-center" style="border-style:solid;border-color: #d9d9d9;border-radius: 10px;background-color:white;">    
           <div id="containerChart">
               
           </div> 
           <button class="formButton" type="submit" onclick="location='/formulario'" style="width: 200px;height: 50px;margin: 20px;">
                <span> <- Ir al formulario</span>
            </button>
    </div>
</div>

<script>
        Highcharts.chart('containerChart', {

        title: {
            text: 'Relación Huella de Carbono por mes'
        },
        
        yAxis: {
            title: {
                text: 'Valor de huella de carbono'
            }
        },

        xAxis: {
            // accessibility: {
            //     rangeDescription: 'Range: 2018 to 2022'
            // },
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Novivembre', 'Diciembre','Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Novivembre', 'Diciembre' ]
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                pointStart: 0
            }
        },

        series: [{
            name: 'Huella de carbono Total',
            data: <?= $data ?>
        }, {
            name: 'Alimentación',
            data: <?= $dataA ?>
        }, {
            name: 'Transporte',
            data: <?= $dataT ?>
        }, {
            name: 'Vivienda',
            data: <?= $dataV ?>
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

        });
    </script>
@endsection
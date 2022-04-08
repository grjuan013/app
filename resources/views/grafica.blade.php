@extends('layouts.app')

@section('content')
<div class="container" style="margin-left: 15%;">
    <div class="row justify-content-center" style="border-style:solid;border-color: #d9d9d9;border-radius: 10px;background-color:white; width: 80%;padding: 10px;">    
           <div id="containerChart">
               
           </div> 
    </div>
</div>

<script>
        Highcharts.chart('containerChart', {

        title: {
            text: 'Relación Huella de Carbono por mes'
        },

        subtitle: {
            text: 'Source: thesolarfoundation.com'
        },

        yAxis: {
            title: {
                text: 'Valor de huella de carbono'
            }
        },

        xAxis: {
            accessibility: {
                rangeDescription: 'Range: 2018 to 2022'
            },
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
                pointStart: 01
            }
        },

        series: [{
            name: 'Huella de carbono',
            data: <?= $data ?>
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
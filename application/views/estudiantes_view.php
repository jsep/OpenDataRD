<?php
$provincias = array("DISTRITO NACIONAL","AZUA","BAORUCO","BARAHONA","DUARTE","EL SEIBO","ESPAILLAT","INDEPENDENCIA","LA ALTAGRACIA","LA ROMANA","LA VEGA","MONTE CRISTI","PEDERNALES","PERAVIA","PUERTO PLATA","HERMANAS MIRABAL","SAN JUAN","SANTIAGO","VALVERDE","MONTE PLATA","HATO MAYOR","SANTO DOMINGO");

function genCategories($arr){
    $res = "";
    foreach($arr as $a){
        $res.="'{$a}',";
    }
   $res = substr($res,0,-1);
    return $res;
}
function genDataSeries($arr){
    $res = "";
    foreach($arr as $a){
        if($a == "SANTO DOMINGO" || $a == "DISTRITO NACIONAL"){
            $res.="['{$a}',".rand(8000, 15000)."],";
        }
        else{
            $res.="['{$a}',".rand(500, 8000)."],";
        }

    }
    $res = substr($res,0,-1);
    return $res;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
    body{
        background-color: #dddddd;
    }
    div.main{
        background-color: #f5f5f5;
        width: 60%;
        border-radius: 8px;
    }
</style>
<div class="main">
    <div id="indicador1" style="min-width: 200px; height: 200px; margin: 0 auto"></div>
    <div id="indicador2" style="min-width: 200px; height: 200px; margin: 0 auto"></div>
    <div id="indicador3" style="min-width: 200px; height: 800px; margin: 0 auto"></div>
    <div id="indicador4" style="min-width: 200px; height: 800px; margin: 0 auto"></div>
    <div id="indicador5" style="min-width: 200px; height: 800px; margin: 0 auto"></div>
</div>
<script type="text/javascript" src="./js/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
    //
    $(function () {
        $('#indicador1').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Proporción de estudiantes por sexo'
            },
            subtitle: {
                text: 'Proporción de estudiantes por sexo (Demostración)'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                percentageDecimals: 0
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function () {
                            return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2, ',') + ' %';
                        }
                    }
                }
            },
            series: [
                {
                    type: 'pie',
                    name: 'Escuelas',
                    data: [
                        ['Femenino', 7802],
                        ['Masculino', 9802]
                    ]
                }
            ]
        });

        $('#indicador2').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Proporción de estudiantes por provincia'
            },
            subtitle: {
                text: 'Proporción de estudiantes por provincia (Demostración)'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function () {
                            return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2, ',') + ' %';
                        }
                    }
                }
            },
            series: [
                {
                    type: 'pie',
                    name: 'Escuelas',
                    data: [<?php echo genDataSeries($provincias); ?>]
                }
            ]
        });
        $('#indicador3').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Promedio de calificacion de estudiantes divididos por provincia'
            },
            subtitle: {
                text: 'Promedio de calificacion de estudiantes divididos por provincia (Demo)'
            },
            xAxis: {
                categories: [<?php echo genCategories($provincias); ?>],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                max:100,
                title: {
                    text: '',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -100,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Promedio',
                data: [80, 82, 87, 93, 96, 94, 82, 91, 82, 91, 88, 85, 89, 94, 93, 90, 88, 91, 88, 92, 87, 93]

            }]
        });
        $('#indicador4').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Promedio de calificacion de estudiantes divididos por provincia y sexo'
            },
            subtitle: {
                text: 'Promedio de calificacion de estudiantes divididos por provincia y sexo (Demostración)'
            },
            xAxis: {
                categories: [<?php echo genCategories($provincias); ?>],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                max:100,
                title: {
                    text: '',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ''
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -100,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Masculino',
                data: [88, 91, 88, 92, 87, 95, 80, 82, 87, 93, 96, 94, 82, 91, 82, 91, 88, 85, 89, 94, 93, 90]
            }, {
                name: 'Femenino',
                data: [96, 94, 82, 91, 82, 91, 88, 85, 89, 94, 93, 90,88, 91, 88, 92, 87, 87, 80, 82, 87, 93]
            }]
        });

    });
    //
</script>
<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>
<?php
$data = json_decode(file_get_contents("http://api.one.gob.do/indicadores"));
// foreach ($indicadores as $key => $value) {

//     $url = "http://api.one.gob.do/censo2010/".$value."/provincia/32";
//     $datos = file_get_contents($url);
//     $datos = json_decode($datos);
//             print_r($datos);
//             echo "</br>";
// }
// function genSeries(){
    $indicadores = "28,29,30,31,32,33";
    $indicadores = explode(",", $indicadores);
    $data2 = "";
        foreach ($indicadores as $key => $value) {

            $url = "http://api.one.gob.do/censo2010/".$value."/provincia/32";
            $datos = file_get_contents($url);
            $datos = json_decode($datos);
//            print_r($datos);
//            echo "</br>";
            foreach ($datos->datos as $key => $value){
                    $data2 .= "{
                        name : '{$datos->infoindicador->nombre}',
                        data : [{$value->valor}]
                    },";
            }
        }
        $data2 = substr($data2, 0,-1);
        // return $data2;
    // }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="../../js/jquery-1.10.1.min.js"></script>
		<script type="text/javascript">
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['  '],
                title: {
                    text: ''
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: '',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' viviendas'
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
            series: [<?php echo $data2;?>]
        });
    });
    

		</script>
	</head>
	<body>
<script src="../../js/highcharts.js"></script>
<script src="../../js/modules/exporting.js"></script>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

	</body>
</html>

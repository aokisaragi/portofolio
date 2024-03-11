<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Tables</title>
        <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/css/bootstrap.css');?>" />

        <script src="<?php echo base_url('jquery_data_table/js/jquery-3.5.1.js');?>"></script>
        <script src="<?php echo base_url('jquery_data_table/js/bootstrap.min.js');?>"></script>

        <script src="<?php echo base_url('jquery_data_table/highcharts/code/highcharts.js'); ?>"></script>
        <script src="<?php echo base_url('jquery_data_table/highcharts/code/modules/exporting.js'); ?>"></script>
        <script src="<?php echo base_url('jquery_data_table/highcharts/code/modules/accessibility.js'); ?>"></script>
    <?php
            $arrayNama = array();
            $arrayNilai = array();
            foreach ($barang as $row) {
                        $arrayNama[] = "'".$row->NAMA_BRG."', ";
                        $arrayNilai[] = "".$row->STOK_BRG.",";
                        }
    ?>
        <script type="text/javascript">
            $(function(){
                var chart = new Highcharts.Chart({
                    chart: {
                        renderTo: "chart",
                        type: 'bar',
                    },
                    title: {
                        text: 'TOP 10 STOK',
                        x: -20
                    },
                    subtitle: {
                        text: 'm.asrofi669@gmail.com',
                        x: -20
                    },
                    xAxis: {
                        categories: [<?= join($arrayNama) ?>],
                        title: {
                        text: null
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'PCS',
                            align: 'high'
                            },
                    labels: {
                        overflow: 'justify'
                        }
                    },
                    tooltip: {
                        valueSuffix: 'PCS'
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
                        x: -40,
                        y: 80,
                        floating: true, 
                        borderWidth: 1,
                        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                        shadow: true
                        },
                credits: {
                        enabled: false
                        },
                series: [{
                        name: 'STOK (PCS)',
                        data: [<?= join($arrayNilai) ?>],
                        color: '#FFB41A',
                        }]
                });
    });
    </script>
</head>
<body>
            <div id="chart"></div>
</body>
</html>
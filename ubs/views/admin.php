
  <!-- Content Wrapper. Contains page content -->
 <!-- Content Wrapper. Contains page content -->
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
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div id="chart"></div>
        <div class="row">
                
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- /.content-wrapper -->
  
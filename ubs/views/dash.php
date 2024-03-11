<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Tables</title>
        <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/css/bootstrap.css');?>" />
        <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/css/dataTables.bootstrap4.min.css');?>" />

        <script src="<?php echo base_url('jquery_data_table/js/jquery-3.5.1.js');?>"></script>
        <script src="<?php echo base_url('jquery_data_table/js/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo base_url('jquery_data_table/js/dataTables.bootstrap4.min.js');?>"></script>
        <script>
            $(document).ready(function(){
            $('#tabel-data').DataTable();
            });
        </script>
</head>
<body>
<!-- Static navbar -->
<nav class="navbar navbar-inverse navbar-static-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" ariacontrols="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">CRUD Barang</a>
</div>
</div>
</nav>
<div class="container">
<!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
<div class="panel-heading"><b>Daftar Barang</b></div>
<div class="panel-body">
<a href="<?=base_url()?>index.php/home/insert" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i>
Tambah</a>
<a href="<?=base_url()?>index.php/home/top10" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i>
Stock TOP 10</a>
<a href="<?=base_url()?>index.php/home/login" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i>
login</a>
<table id="tabel-data" class="table table-striped table-bordered" style="100%">
<thead>
<tr>
<th>NO</th>
<th>BARCODE</th>
<th>NAMA_BRG</th>
<th>HARGA_BRG</th>
<th>KETERANGAN</th>
<th>JENIS</th>
<th>SATUAN</th>
<th>STOK_BRG</th>
<th>OPERATION</th>
</tr>
</thead>
<tbody>
<?php $nomer=1; ?>
<?php foreach ($barang as $row) { ?>
<tr>
<td><?php echo $nomer; ?></td>
<td><?php echo $row->BARCODE; ?></td>
<td><?php echo $row->NAMA_BRG; ?></td>
<td><?php echo $row->HARGA_BRG; ?></td>
<td><?php echo $row->KETERANGAN; ?></td>
<td><?php echo $row->JENIS; ?></td>
<td><?php echo $row->SATUAN; ?></td>
<td><?php echo $row->STOK_BRG; ?></td>
<td>
<a href="<?php echo base_url(); ?>index.php/home/update/<?php echo $row->KODE_BRG; ?>">Update</a>
<a href="<?php echo base_url(); ?>index.php/home/delete/<?php echo $row->KODE_BRG; ?>">Delete</a>
</td>
</tr>
<?php $nomer++; } ?>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
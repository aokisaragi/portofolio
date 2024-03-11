<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tables</title>

    <link rel="stylesheet" href="<?php echo base_url('jquery_data_table/css/bootstrap.css');?>" />
<script src="<?php echo base_url('jquery_data_table/js/jquery-3.5.1.js');?>"></script>
<script src="<?php echo base_url('jquery_data_table/js/jquery.dataTables.min.js');?>"></script>
</head>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Form Barang</b></div>
            <div class="panel-body">
            <?php echo form_open('Home/proses_update'); ?>
            <input name="KODE_BRG" type="hidden" value="<?php echo $barang->KODE_BRG; ?>">
            <table class="table table-striped">
                <tr>
                    <td style="width:15%;">BARCODE</td>
                    <td>
                        <div class="col-sm-2">
                            <input type="text" name="BARCODE" value="<?php echo $barang->BARCODE; ?>" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:15%;">NAMA_BRG</td>
                    <td>
                        <div class="col-sm-2">
                            <input type="text" name="NAMA_BRG" value="<?php echo $barang->NAMA_BRG; ?>" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:15%;">HARGA_BRG</td>
                    <td>
                        <div class="col-sm-2">
                            <input type="text" name="HARGA_BRG" value="<?php echo $barang->HARGA_BRG; ?>" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:15%;">KETERANGAN</td>
                    <td>
                        <div class="col-sm-2">
                            <input type="text" name="KETERANGAN" value="<?php echo $barang->KETERANGAN; ?>" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:15%;">JENIS</td>
                    <td>
                        <div class="col-sm-2">
                            <input type="text" name="JENIS" value="<?php echo $barang->JENIS; ?>" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:15%;">SATUAN</td>
                    <td>
                        <div class="col-sm-2">
                            <input type="text" name="SATUAN" value="<?php echo $barang->SATUAN; ?>" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width:15%;">STOK_BRG</td>
                    <td>
                        <div class="col-sm-2">
                            <input type="text" name="STOK_BRG" value="<?php echo $barang->STOK_BRG; ?>" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-success" value="simpan">
                        <button type="reset" class="btn btn-default">Bersihkan Layar</button>
                        <input type="button" value="Back" onClick="history.go(-1);return true;">
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</div>
</body>
</html>
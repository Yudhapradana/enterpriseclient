<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> 
          <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/datatables/dataTables.min.css" /> 

          <script src="//code.jquery.com/jquery.js"></script> 
          <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
          <script src="<?php echo base_url()?>assets/js/plugins/datatables/dataTables.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/diagram.css" /> 
    <script src="<?php echo base_url()?>assets/js/diagram.js"></script> 


    </head>

    <script type="text/javascript">
    $(document).ready(function() {
    $('#aktif').DataTable();
} );
</script>
    <body>
        <table class="table table-striped" id="aktif">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>ID Transaksi</td>
                    <td>Tanggal Pinjam</td>
                    <td>Tanggal Kembali</td>
                    <td>Nis</td>
                    <td>Action</td>
                </tr>
            </thead>
            <?php $no=0; foreach($peminjaman as $row): $no++;?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $row->id_transaksi;?></a></td>
                <td><?php echo $row->tanggal_pinjam;?></td>
                <td><?php echo $row->tanggal_kembali;?></td>
                <td><?php echo $row->nis;?></td>
                <td><a href="<?php echo site_url("pengembalian/byId/".$row->id_transaksi) ?>" class="btn btn-success">Pengembalian</a></td>
            </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>
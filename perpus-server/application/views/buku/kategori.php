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
   


    </head>

    <script type="text/javascript">
    $(document).ready(function() {
    $('#kategori').DataTable();
} );
</script>
<body>

<legend><?php echo $tittle;?></legend>


<hr>

<Table class="table table-striped" id="kategori">
    <thead>
        <tr>
            <td>No.</td>
            <td>Id Kategori</td>
            <td>Nama Kategori</td>
            <td></td>
            <td></td>
            
        </tr>
    </thead>
    <?php $no=0; foreach($kategori as $row ): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row['id_kategori'] ?></td>
        <td><?php echo $row['nama_kategori'] ?></td>
        <td><a href="<?php echo site_url('buku/edit_kategori/'.$row['id_kategori']);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
        <td><a href="#" class="hapus" kode="<?php echo $row['id_kategori'];?>"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
    <?php endforeach;?>
</Table>

<script>
    $(function(){
        $(".hapus").click(function(){
            var kode=$(this).attr("kode");
            
            $("#idhapus").val(kode);
            $("#myModal").modal("show");
        });
        
        $("#konfirmasi").click(function(){
            var kode=$("#idhapus").val();
            
            $.ajax({
                url:"<?php echo site_url('buku/hapus_kategori');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('buku/halaman_kategori');?>";
                }
            });
        });
    });
    
</script>
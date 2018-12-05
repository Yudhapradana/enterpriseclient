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
    $('#petugas').DataTable();
} );
</script>
<body>

<legend>Tambah Petugas</legend>
<a href="<?php echo site_url('dashboard/tambahpetugas');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
<?php echo $message;?>
<br>
<br>

<table class="table table-striped" id="petugas">
    <thead>
        <tr>
            <td>No.</td>
            <td>Username</td>
            <td>Password</td>
            <td></td>
            <td></td>

        </tr>
    </thead>
    <?php $no=0; foreach($petugas as $row): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->user;?></td>
        <td><?php echo $row->password;?></td>
        <td><a href="<?php echo site_url('dashboard/edit/'.$row->id_petugas);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
        <td><a href="#" class="hapus" kode="<?php echo $row->id_petugas;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
    <?php endforeach;?>
</table>


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
                url:"<?php echo site_url('dashboard/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('dashboard/petugas/delete_success');?>";
                }
            });
        });
    });
</script>
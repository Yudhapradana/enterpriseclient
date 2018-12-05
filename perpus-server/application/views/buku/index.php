<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />  

          <script src="//code.jquery.com/jquery.js"></script> 
          <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/diagram.css" /> 
<script src="<?php echo base_url()?>assets/js/diagram.js"></script> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
<script src="http://code.highcharts.com/highcharts.src.js" type="text/javascript"></script>
<script type="text/javascript">
var chart1; 
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Peminjaman Buku di <br> Perpustakaan SMAN 2 SIDOARjo '
         },
         xAxis: {
            categories: ['Judul Buku']
         },
         yAxis: {
            title: {
               text: 'Jumlah Buku'
            }
         },
              series:             
            [
           //  <?php 
           // //  include('config.php');
           // // $sql   = "SELECT *  FROM product";
           // //  $query = mysqli_query( $conn,$sql )  or die(mysqli_error());
           // //  while( $ret = mysqli_fetch_array( $query ) ){
           // //      $bulan=$ret['bulan']; 
 
           // //       $sql_jumlah   = "SELECT jumlah FROM product WHERE bulan='$bulan'";        
           // //       $query_jumlah = mysqli_query( $conn,$sql_jumlah ) or die(mysqli_error());
           // //       while( $data = mysqli_fetch_array( $query_jumlah ) ){
           // //          $jumlah = $data['jumlah'];                 
           //        }             
                  // ?>
                 
                 <?php foreach ($nBuku as $key ) { ?>
                  {
                      name: '<?php echo $key->judul;?>',
                      data: [<?php echo $key->stok; ?>]
                 
                  },
                 <?php } ?>
            ]
      });
   });  
</script>
</head>

<body>

  <div class="col-lg-12">

        <div id="page-wrapper">
            
                        <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                                <h2 class="text-center">Data Peminjaman Buku</h2>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="container">
                                  <div class="row">
                                        <div class="col-md-1 col-lg-9">
                                           
                                            <!-- //.text-center -->
                                            
                                            <div id='container' class="col-lg-11"></div>



                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- /.panel-body -->

                    


                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->

<div class="col-md-12">
    <div class="nav navbar-nav navbar-right">
    <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('buku/cari');?>" method="post">
        <div class="form-group">
            <label>Cari Kode / Judul Buku</label>
            <input type="text" class="form-control" placeholder="Search" name="cari">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
    </form>
</div>
<a href="<?php echo site_url('buku/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
<hr>
<?php echo $message;?>
<Table class="table table-striped">
    <thead>
        <tr>
            <td>No.</td>
            <td>Image</td>
            <td>Kode Buku</td>
            <td>Judul</td>
            <td>Pengarang</td>
            <td>Klasifikasi</td>
            <td>Tanggal Masuk</td>
            <td>Stok</td>
            <td colspan="2"></td>
        </tr>
    </thead>
    <?php $no=0; foreach($buku as $row ): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><img src="<?php echo base_url('assets/img/'.$row->image);?>" height="100px" width="100px"></td>
        <td><?php echo $row->kode_buku;?></td>
        <td><?php echo $row->judul;?></td>
        <td><?php echo $row->pengarang;?></td>
        <td><?php echo $row->klasifikasi;?></td>
        <td><?php echo $row->tanggal_input ?></td>
        <td><?php echo $row->stok ?></td>
        <td><a href="<?php echo site_url('buku/edit/'.$row->kode_buku);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
        <td><a href="#" class="hapus" kode="<?php echo $row->kode_buku;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
    <?php endforeach;?>
</Table>
<?php echo $pagination;?>

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
                url:"<?php echo site_url('buku/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('buku/index/delete_success');?>";
                }
            });
        });
    });
    
</script>
</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</div>
</body>

</html>

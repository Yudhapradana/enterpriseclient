    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Perpustakaan SMAN 2 SIDOARJO</a>
            </div>
            <!-- /.navbar-header -->

            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                 <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('web/cari_buku');?>" method="post">
                            <div class="form-group">
                                <input type="3ext" name="cari" class="form-control" placeholder="Cari Buku" width="50px" height="500px">
                                
                            </div>
                        </form>
                </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('user') ?>"><h4><i class="glyphicon glyphicon-dashboard"></i>  Dashboard</h4></a>
                        </li>
                        <li>
                            <a href=""><h4><i class="glyphicon glyphicon-book"></i> Daftar Buku</h4></a>
                        </li>
                       
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">Halaman Details Buku</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="panel panel-info">
                     <?php $no=0; foreach($details as $row ): $no++;?> 
                        <div class="panel-heading">
                           <h2 class="text-center"><?php echo $row->judul;?></h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                        
                            <img src="<?php echo base_url('assets/img/'.$row->image);?>" height="500px" width="370px">
                        <?php endforeach;?>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                   
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-7">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2>Keterangan : </h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <h3><?php echo $row->judul;?></h3>    
                                </div>
                                
                                <div class="list-group-item">
                                   <h4>Kode Buku : <?php echo $row->kode_buku;?></h4>
                                </div>
                                
                                <div class="list-group-item">
                                   <h4>Kategori : <?php echo $row->kategori;?></h4>
                                </div>
                                
                                <div class="list-group-item">
                                   <h4>Keterangan : <?php echo $row->klasifikasi;?></h4>
                                </div>
                              
                            </div>
                            <!-- /.list-group -->
                            <a onclick="javascript:history.go(-1)" class="btn btn-success btn-block"> Kembali </a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                   
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    
    <link href="<?php echo base_url('assets/css/metisMenu.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/sb-admin-2.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/morris.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">


    <!-- Bootstrap Core JavaScript -->

    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/metisMenu.min.js');?>"></script>
     <script src="//code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url('assets/js/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/morris-data.js');?>"></script>
    <script src="<?php echo base_url('assets/js/sb-admin-2.js');?>"></script>

    
 
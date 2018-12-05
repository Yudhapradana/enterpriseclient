<!-- Bootstrap CSS -->
          <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />  

          <script src="//code.jquery.com/jquery.js"></script> 
          <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/diagram.css" /> 
<script src="<?php echo base_url()?>assets/js/diagram.js"></script> 
<div class="container">
  <div class="row">
        <div class="col-md-1 col-lg-9">
            <div class="text-center text-uppercase">
                <h2>Data Peminjaman Buku</h2>
            </div>
            <!-- //.text-center -->
            
            <div class="column-chart">
                <div class="legend legend-left hidden-xs">
                    <h3 class="legend-title">Jumlah</h3>
                </div>
                <!-- //.legend -->
            
                <div class="legend legend-right hidden-xs">
                    <div class="item">
                        <h4>100</h4>
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <h4>75</h4>
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <h4>50</h4>
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <h4>25</h4>
                    </div>
                    <!-- //.item -->
                </div>
                <!-- //.legend -->
            
                <div class="chart clearfix">
              <?php foreach ($nBuku as $key ) { ?>
                    <div class="item">
                        <div class="bar">
                            <span class="percent">(<?php echo $key->stok; ?>) </span>
            
                            <div class="item-progress" data-percent="<?php echo $key->stok; ?>">
                                <span class="title"><?php echo $key->judul;?></span>
                            </div>
                            <!-- //.item-progress -->
                        </div>
                        <!-- //.bar -->
                    </div>
                    <!-- //.item -->
              <?php } ?>
            
                </div>
            </div>
        </div>
    </div>
</div>
<br>  
<br>  
<br>  
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
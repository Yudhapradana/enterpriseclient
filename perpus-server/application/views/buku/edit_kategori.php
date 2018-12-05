<legend><?php echo $title;?></legend>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" />
    <?php echo validation_errors();?>
   
    <div class="form-group">
        <label class="col-lg-2 control-label">Id Kategori</label>
        <div class="col-lg-5">
            <input type="text" name="id" class="form-control" value="<?php echo $kategori['id_kategori'];?>" readonly="readonly">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Kategori</label>
        <div class="col-lg-5">
            <input type="text" name="nama" class="form-control" value="<?php echo $kategori['nama_kategori'];?>">
        </div>
    </div>

    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('buku/halaman_kategori');?>" class="btn btn-default">Kembali</a>
    </div>
</form>
<legend><?php echo $title;?></legend>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" />
    <?php echo validation_errors(); echo $message;?>

    <script>
        $("#nama_kategori").click(function(){
            var nama_kategori=$("#nama_kategori").val();
            
            $.ajax({
                url:"<?php echo site_url('buku/cariKategori');?>",
                type:"POST",
                data:"id_kategori="+id_kategori,
                cache:false,
                success:function(html){
                    $("#id_kategori").val(html);
                }
            })
        })

        function ajax1(id_kategori){
            alert("Kategori Buku adalah "+id_kategori+''+1);
            //$("#hasil_ajax").val()=nama_kategori+''+1;
           
          
            $.ajax({//bawaan j query manggil inisiasi ke fungsi ajax , ajax adalah bawaan j query
                url:"<?php echo site_url('buku/cariKategori');?>",
                type:"POST",
                data:"id_kategori="+id_kategori,//ibarat di php itu name misal $_POST di php + id_kategori itu value di dapat dari combo box
                cache:false,
       
                success:function(html){//response 200 sukses , 500 ke atas error , 404 itu error 
                    //$("#id_kategori").val(html); //return yang diberikan , mencari id kategori ada atau tidak , kalau ada di id di set menjadi menjadi return tersebut
                     document.getElementById("hasil_ajax").value = id_kategori+''+1;//mengeset nilai pada suatu id yang bernama hasil_ajax (name dari id kategori) 
                }

            })
        }
    </script>


    
    <?php foreach ($buku as $key) {?>
     <div class="form-group">
        <label class="col-lg-2 control-label">Kategori</label>
        <div class="col-lg-5">
            <select name="nama_kategori" id="nama_kategori" onchange="ajax1(this.value)">
             <?php foreach ($kategori as $key) {?>
                <option value="<?php echo $key['id_kategori']?>"><?php echo $key['nama_kategori']; ?></option>
            <?php    } ?>
            </select>
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal2"> Tambah  </button>

            <a href="<?php echo site_url('buku/halaman_kategori'); ?>" class="btn btn-success"> Lihat Kategori</a>
        </div>
    </div>
    <?php } ?>


   <!--  <div class="form-group">
        <label class="col-lg-2 control-label">Id Buku</label>
        <div class="col-lg-5"> -->
            <input type="hidden" name="kode" class="kode" id="hasil_ajax" readonly="readonly">
       <!--  </div>
    </div> -->
    
    <div class="form-group">
        <label class="col-lg-2 control-label">Judul Buku</label>
        <div class="col-lg-5">
            <input type="text" name="judul" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-2 control-label">Pengarang</label>
        <div class="col-lg-5">
            <input type="text" name="pengarang" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-2 control-label">Klasifikasi</label>
        <div class="col-lg-10">
            <textarea name="klasifikasi"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-2 control-label">Tanggal</label>
        <div class="col-lg-5">
            <input type="date" name="tgl" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-2 control-label">Jumlah Buku</label>
        <div class="col-lg-5">
            <input type="number" name="stok" class="form-control">
        </div>
    </div>


   
    <div class="form-group">
        <label class="col-lg-2 control-label">Image</label>
        <div class="col-lg-5">
            <input type="file" name="gambar" class="form-control">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('buku');?>" class="btn btn-default">Kembali</a>
    </div>
</form>




            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Tambah Kategori</h4>
                  </div>
                  <div class="modal-body">
                        <div class="form-horizontal">
                            <?php echo form_open_multipart('buku/tambah_kategori'); ?>
                            <?php echo validation_errors(); ?>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Id kategori</label>
                                <div class="col-lg-5">
                                    <input type="text" name="kode" class="form-control" value ="<?php echo $key['id_kategori'];?>" readonly="readonly">
                                </div>
                            </div>

                            <label class="col-lg-3 control-label">Nama Kategori</label>
                            <div class="col-lg-5">
                                <input type="text" name="kategori" id="kategori" class="form-control">
                            </div>
                        </div>
                        
                        <div id="kategori"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>  Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<style type="text/css">
	@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
.gallery-wrap .img-big-wrap img {
    height: 400px;
    width: 400px;
   /* width: auto;*/
    display: inline-block;
    cursor: zoom-in;
}


.gallery-wrap .img-small-wrap .item-gallery {
    width: 70px;
    height: auto;
    margin: 7px 2px;
    display: inline-block;
    overflow: hidden;
}

.gallery-wrap .img-small-wrap {
    text-align: center;
}
.gallery-wrap .img-small-wrap img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 4px;
    /*cursor: zoom-in;*/
}
.price-title{
    font-weight: 700;
}
.price{
    font-size: 24px;
    line-height: 31px;
    text-transform: uppercase;
    max-height: 66px;
    overflow: hidden;
    font-family: 'Open Sans',Arial,sans-serif;
    font-weight: 700;
    width: 100%;
    padding: 0;
    float: none;


}
.color-price-waanbii{
    color: #FA3A11; 
}
.color-box-waanbii{
    background: #FD6342; 
    color:white;
}

.fa-beat {
  animation:fa-beat 5s ease infinite;
}
@keyframes fa-beat {
  0% {
    transform:scale(1);
  }
  5% {
    transform:scale(1.25);
  }
  20% {
    transform:scale(1);
  }
  30% {
    transform:scale(1);
  }
  35% {
    transform:scale(1.25);
  }
  50% {
    transform:scale(1);
  }
  55% {
    transform:scale(1.25);
  }
  70% {
    transform:scale(1);
  }
}

</style>
<div class="container">
    <br>
<?php $no=0; foreach($details as $row ): $no++;?>					

<div class="card border-0">
	<div class="row">
  		<aside class="col-sm-4">
        <article class="gallery-wrap"> 
        <div class="img-big-wrap">
          <div> <a href="#"><img src="<?php echo base_url('assets/img/'.$row->image);?>" height="500px" width="400px"></a></div>
        </div>
        </article>
        		</aside>
        		<aside class="col-sm-5">
        <article class="card-body m-0 pt-0 pl-5">
        	<h3 class="title text-uppercase">Details Buku</h3>

        <div class="mb-3 mt-3"> 
        		<h3><span class="h7 text-success">Keterangan </span></h3>
        </div>	
        <div class="mb-3 mt-3"> 
            <span class="price-title">Judul Buku :</span>
        		<span class="price color-price-waanbii"><?php echo $row->judul;?></span>
        </div>

      <dl class="param param-feature">
        <dt>Kode Buku</dt>
        <dd><?php echo $row->kode_buku;?></dd>
      </dl>

      <dl class="param param-feature">
        <dt>Judul Buku</dt>
        <dd><?php echo $row->judul;?></dd>
      </dl>

      <dl class="param param-feature">
        <dt>Kategori Buku</dt>
        <dd><?php echo $row->kategori;?></dd>
      </dl>


      <dl class="item-property">
        <dt>Description</dt>
        <dd><p><?php echo $row->klasifikasi;?> </p></dd>
      </dl>

    </article>
		</aside>
		<aside class="col-sm-3">
    <div class="nav navbar-nav navbar-left">
                        <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('web/cari_buku');?>" method="post">
                            <div class="form-group">
                                <input type="3ext" name="cari" class="form-control" placeholder="Cari Buku" width="50px" height="500px">
                          
                            </div>
                        </form>
                    </div>
			<div class="row mb-4 mt-4">
  <button onclick="javascript:history.go(-1)" class="btn btn-success" type="button"> <i class="glyphicon glyphicon-log-in"></i> Kembali </button>
	</div>
		
<hr class="m-0 p-0">
	<div class="row mb-4 mt-4">
		Details Buku di Perpustakaan SMAN 2 Sidoarjo In 2018
		    </div>
		</aside>
	</div>
</div>

<?php endforeach;?>
</div>
<!--container.//-->
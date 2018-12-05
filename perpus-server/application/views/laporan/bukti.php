<!DOCTYPE html>
<html>
<head>
  <title>Bukti Pengembalian</title>
 
  <!-- <link rel="stylesheet" href="styles/main.css" media="screen" charset="utf-8"/> -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="content-type" content="text-html; charset=utf-8">
</head>

<body>
 
  <div class="container" style="padding-right: 400px">
   <?php foreach($detail as $row):?>

    <section>
      <div class="card" style="border: 2px solid black">
        <div class="container" style="padding-left: 10px;padding-bottom: 5px">
        <div class="row">
          <div class="col-2">
        <pre><font size="20px"><b>Perpustakaan SMAN 2 SIDOARJO</b></font>
        <h5>Address : Jalan Raya Lingkar Barat Gading Fajar 2, 
        <br>Sepande, Sidoarjo</h5></pre>
        </div>
        <div class="col-4">
        <img src="<?php base_url()?>assets/img/SMA_Negeri_2_Sidoarjo.jpg" width="150" height="100" alt="" align="right" style="margin-right: 10px; margin-top: -130px"></div></div>
        </div>
        <hr>
        
        
<div class="row">   
         <div class="col-6" style="margin-left: 20px">
      
       <pre><b>ID Transaksi :<?php echo $pinjam['id_transaksi'];?></b></pre>
       <pre><b>Kode Buku: <?php echo $row->kode_buku;?></b></pre>
       <pre>Judul Buku : <?php echo $row->judul;?></pre>
       <pre>NIS : <?php echo $pinjam['nis'];?></pre>
       <pre>Tanggal Pinjam : <?php echo $pinjam['tanggal_pinjam'] ?></pre>

    
      <!--  <div class="col-md-3" align="right" style="margin-top: -200px; margin-right: 5px; margin-bottom: 5px">
       
         <img src="<?php base_url()?>assets/images/<?php echo $data->noPembelian?>.png" width="200" height="200"></div> -->
    </div>
    <?php  endforeach; ?>
    </div>
  </div>
  </section>
  <br><br><br><br>
 
  </div>
</body>

</html>
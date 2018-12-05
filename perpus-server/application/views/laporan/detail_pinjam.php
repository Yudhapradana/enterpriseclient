<legend>Detail Peminjaman</legend>
<div class="col-md-6">
    <div class="form-horizontal">
    <div class="form-group">
        <label class="col-lg-5">ID Transaksi</label>
        <div class="col-lg-5">
            : <?php echo $pinjam['id_transaksi'];?>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-5">Tanggal Pinjam</label>
        <div class="col-lg-5">
            : <?php echo date(('d-m-Y'),strtotime($pinjam['tanggal_pinjam']));?>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-lg-5">Tanggal Saat Ini</label>
        <div class="col-lg-5">
            : <?php echo date('d-m-Y');?>
        </div>
    </div>
    

    <div class="form-group">
        <label class="col-lg-5">Denda</label>
        <div class="col-lg-5">
            : <?php $interval = date_diff(date_create($pinjam['tanggal_pinjam']),date_create(date('Y-m-d')));
             echo $interval->format("%R%a")*500?>
        </div>
    </div>


    <div class="form-group">
        <label class="col-lg-5">NIS</label>
        <div class="col-lg-5">
            : <?php echo $pinjam['nis'];?>
        </div>
    </div>

     <div class="form-group">
        <label class="col-lg-5">Keterangan</label>
        <div class="col-lg-5">
            : <?php echo $pinjam['status'];?>
        </div>
    </div>
    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <td>Kode Buku</td>
            <td>Judul Buku</td>
            <td>Pengarang</td>
        </tr>
    </thead>
    <?php foreach($detail as $row):?>
    <tr>
        <td><?php echo $row->kode_buku;?></td>
        <td><?php echo $row->judul;?></td>
        <td><?php echo $row->pengarang;?></td>
    </tr>
    <?php endforeach;?>

</table>
    <a href="<?php echo site_url("laporan/createPdf/".$this->uri->segment(3)) ?>" class="btn btn-success"> <i class="material-icons">print</i> Cetak Bukti </a>
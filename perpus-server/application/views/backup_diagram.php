
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
                        <h4>Sangat Baik</h4>
                    </div>
                    <!-- //.item -->
            
                    <div class="item">
                        <h4>Baik</h4>
                    </div>
                   
                    <!-- //.item -->
            
                    <div class="item">
                        <h4>Kurang</h4>
                    </div>
                    <!-- //.item -->
                </div>
                <!-- //.legend -->
            
                <div class="chart clearfix">
              <?php foreach ($kategori_buku as $key ) { ?>
                    <div class="item">
                        <div class="bar">
                            <span class="percent">(<?php echo $key->jumlah; ?>%) (<?php echo $key->kategori;?>)</span>
            
                            <div class="item-progress" data-percent="<?php echo $key->jumlah; ?>">
                                <span class="title"><?php echo $key->kategori;?></span>
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

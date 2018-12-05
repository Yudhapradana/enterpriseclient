<!doctype html>
    <html>
        <head>
            <title>Perpustakaan</title>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
        
            <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
        
            
            <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
            <script>
                    tinymce.init({selector:'textarea'});
            </script>
        </head>
        <body>

  
  <div class="header">
    <section id="header" class="appear">

      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
          <h1><a class="navbar-brand" href="#" data-0="line-height:90px;" data-300="line-height:50px;">PERPUSTAKAAN SMAN 2 SIDOARJO </a></h1>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <li class="active"><a href="#header">Home</a></li>
            <li><a href="#section-about">About</a></li>
            <li><a href="#favorite">Favorite</a></li>
            <li><a href="#terbaru">Terbaru</a></li>
            <li><a href="#line-pricing">Visi </a></li>
            <li><a href="#section-works">Portfolio</a></li>
            <li><a href="<?php echo site_url('web')?>">Login</a></li>

          </ul>
        </div>
        <!--/.navbar-collapse -->
      </div>


    </section>
  </div>


  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active" style="background-image: url(<?php echo base_url('assets/home/img/1.jpg)');?>">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>Selamat Datang di Perpustakaan SMAN 2 Sidoarjo</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>Kumpulan buku terbanyak dan terlengkap</p>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  
                </form>
              </div>
            </div>
          </div>

          <div class="item" style="background-image: url(<?php echo base_url('assets/home/img/2.jpg');?>);">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                <h2>SMAN 2 Sidoarjo</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>Peningkatan pada Sistem Perpustakaan</p>        
                  <h3 class="text-left">
                    <ul>
                      <li>Menyediakan Sistem Informasi Perpustakaan berbasis Website</li>
                      <li>Mempercepat proses peminjaman pada Perpustakaan SMAN 2 Sidoarjo</li>
                      <li>Menyediakan semua tentang informasi buku yang ada</li>
                    </ul>
                  </h3>
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                <form class="form-inline">
                </form>
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->

  <!--about-->
  <section id="section-about">
    <div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">SMAN 2 Sidoarjo</h2>


              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="row-slider">
            <div class="col-lg-6 mar-bot30">
              <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                <div class="slides" data-group="slides">
                  <ul>

                    <div class="slide-body" data-group="slide">
                      <li><img alt="" class="img-responsive" src="<?php echo base_url('assets/home/img/logo.jpg');?>" width="100%" height="350" /></li>
                      <li><img alt="" class="img-responsive" src="<?php echo base_url('assets/home/img/smanda.jpeg');?>" width="100" height="350" /></li>

                    </div>
                  </ul>
                  <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                  <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>

                </div>
              </div>
            </div>

            <div class="col-lg-6 ">
              <div class="company mar-left10">
                <h4>SMAN 2 Sidoarjo <span> , Sidoarjo </span> In 2018.</h4>
                <p>SMA Negeri 2 Sidoarjo, adalah salah satu Sekolah Menengah Atas Negeri, yang terletak di Jalan Lingkar Barat Gading Fajar 2 Sidoarjo, Jawa Timur, Indonesia. Di kalangan masyarakat, sekolah ini lebih akrab disebut dengan akronim SMANDA. Sama dengan SMA pada umumnya di Indonesia, masa pendidikan sekolah di SMAN 2 Sidoarjo ditempuh dalam waktu 3 tahun pelajaran, mulai dari Kelas X sampai Kelas XII. Pada tahun 2014, sekolah ini menjadi salah satu sekolah SMA yang menerapkan Satuan Pendidikan Penyelenggara - Sistem Kredit Semester (SPP-SKS) di Kabupaten Sidoarjo, di mana menggunakan sistem pembelajaran on dan off serta membuka satu kelas istimewa yang para siswanya hanya menempuh pendidikan sekolah dalam waktu dua tahun saja (4 semester). Sistem SPP-SKS seperti ini juga sudah diterapkan oleh beberapa sekolah di Kabupaten Sidoarjo lainnya.</p>
              </div>
             <!--  <div class="list-style">
                <div class="row">
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <ul>
                      <li>Sollicitudin Vestibulum</li>
                      <li>Fermentum Pellentesque</li>
                      <li>Sollicitudin Vestibulum</li>
                      <li>Nullam id dolor id nibh</li>
                    </ul>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12">
                    <ul>
                      <li>Sollicitudin Vestibulum</li>
                      <li>Fermentum Pellentesque</li>
                      <li>Sollicitudin Vestibulum</li>
                      <li>Nullam id dolor id nibh</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->

          </div>
        </div>

      </div>

    </div>
  </section>
  <!--/about-->

  <!-- spacer section:testimonial -->
  <section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
               Perpustakaan adalah mencakup suatu ruangan, bagian dari gedung / bangunan atau gedung tersendiri yang berisi bukubuku koleksi, yang diatur dan disusun demikian rupa, sehingga mudah untuk dicari dan dipergunakan apabila sewaktu-waktu diperlukan oleh pembaca (Sutarno NS, 2006:11). adalah kumpulan atau bangunan fisik sebagai tempat buku dikumpulkan dan disusun menurut sistem tertentu atau keperluan pemakai (Lasa, 2007:12).
              </h5>
              <br />
              <span class="author">Perputakaan SMAN 2 Sidoarjo</span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- favorite -->
  <section id="favorite" class="section pad-bot5 bg-white">
    <div class="container">
      <div class="row mar-bot5">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn" data-animation-delay="7.8s">

              <h2 class="section-heading animated">Buku Favourite</h2>
              <h4>Daftar Buku Favourite di Perpustakaan SMAN 2 Sidoarjo.</h4>

            </div>
          </div>
        </div>
      </div>
      <div class="row mar-bot40">
      <?php foreach($favorit as $row ):?>
        <div class="col-lg-4">
          <div class="wow bounceIn">
            <div class="align-center">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                  <a href="<?php echo site_url('buku/details/'.$row->kode_buku);?>"><img src="<?php echo base_url('assets/img/'.$row->image);?>" height="100px" width="100px"></a>
              
                  </div>
                  <h3><p><?php echo $row->judul ?></p></h3>
                  <h4><p><?php echo $row->pengarang ?></p></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <!-- <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-desktop"></i></figure>
                  </div>
                  <h2><a href="#">Responsive Layout</a></h2>
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">
              <div class="service-col">
                <div class="service-icon">
                  <figure><i class="fa fa-dropbox"></i></figure>
                </div>
                <h2><a href="#">Ready to Use</a></h2>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                  sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
              </div>
            </div>
          </div>
        </div> -->

      </div>

    </div>
  </section>
  <!--/services-->

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
                Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae
                fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus
                suscipit.Nunc velit risus, dapibus non interdum.
              </h5>
              <br />
              <span class="author">Perputakaan SMAN 2 Sidoarjo </span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- team -->
  <section id="terbaru" class="team-section appear clearfix">
   <div class="container">
      <div class="row mar-bot5">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn" data-animation-delay="7.8s">

              <h2 class="section-heading animated">Buku Favourite</h2>
              <h4>Daftar Buku Favourite di Perpustakaan SMAN 2 Sidoarjo.</h4>

            </div>
          </div>
        </div>
      </div>
      <div class="row mar-bot40">
      <?php $no=0;foreach($terbaru as $row ): $no++?>
        <div class="col-lg-4">
          <div class="wow bounceIn">
            <div class="align-center">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                  <a href="<?php echo site_url('buku/details/'.$row->kode_buku);?>"><?php echo $no; ?><img src="<?php echo base_url('assets/img/'.$row->image);?>" height="100px" width="100px"></a>
              
                  </div>

                  <h3><p><?php echo $row->judul ?></p></h3>
                  <h4><p><?php echo $row->pengarang ?></p></h4>

                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <!-- <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-desktop"></i></figure>
                  </div>
                  <h2><a href="#">Responsive Layout</a></h2>
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                    sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">
              <div class="service-col">
                <div class="service-icon">
                  <figure><i class="fa fa-dropbox"></i></figure>
                </div>
                <h2><a href="#">Ready to Use</a></h2>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                  sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
              </div>
            </div>
          </div>
        </div> -->

      </div>

    </div>
  </section>

  <!-- /team -->

  <!-- spacer section:stats -->
  <section id="parallax1" class="section pad-top40 pad-bot40 mar-bot20" data-stellar-background-ratio="0.5">
    <div class="container ">
      <div class="align-center pad-top40 pad-bot40">
        <h4 class="color-white pad-top50">Buku</h4>
        <p class="color-white">Buku merupakan sekumpulan kertas bertulisan yang dijadikan satu. Kertas-kertas bertulisan itu mempunyai tema bahasan yang sama dan disusun menurut kronologi tertentu, dari awal bahasan sampai kesimpulan dari bahasan tersebut.</p>
        <p class="color-white">Buku adalah kumpulan kertas atau bahan lainnya yang dijilid menjadi satu pada salah satu ujungnya dan berisi tulisan atau gambar. Setiap sisi dari sebuah lembaran kertas pada buku disebut sebuah halaman..</p>
      </div>
    </div>
  </section>
  <section id="line-pricing" class="line-section line-center">
    <div class="container pad-top50">
      <div class="row mar-bot10 ">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn">

              <h2 class="section-heading animated" data-animation="bounceInUp">Pricing Table</h2>
              <p>SMAN 2 Sidoarjo</p>

            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.3s">
          <ul>
            <li class="line-head-row">
              Visi
            </li>
            <li class="line-price-row">
            </li>
            <li>
             UNGGUL DALAM MUTU MULIA DALAM PERILAKU
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-4">
        <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.5s">
          <ul class="line-highlight">
            <li class="line-head-row">
              Profile Sekolah
            </li>
            <li class="line-price-row">
            </li>
            <li>
              <p>SMA Negeri 2 Sidoarjo, adalah salah satu Sekolah Menengah Atas Negeri, yang terletak di Jalan Lingkar Barat Gading Fajar 2 Sidoarjo, Jawa Timur, Indonesia. Di kalangan masyarakat, sekolah ini lebih akrab disebut dengan akronim SMANDA. Sama dengan SMA pada umumnya di Indonesia, masa pendidikan sekolah di SMAN 2 Sidoarjo ditempuh dalam waktu 3 tahun pelajaran, mulai dari Kelas X sampai Kelas XII. Pada tahun 2014, sekolah ini menjadi salah satu sekolah SMA yang menerapkan Satuan Pendidikan Penyelenggara - Sistem Kredit Semester (SPP-SKS) di Kabupaten Sidoarjo, di mana menggunakan sistem pembelajaran on dan off serta membuka satu kelas istimewa yang para siswanya hanya menempuh pendidikan sekolah dalam waktu dua tahun saja (4 semester). Sistem SPP-SKS seperti ini juga sudah diterapkan oleh beberapa sekolah di Kabupaten Sidoarjo lainnya.</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.7s">
          <ul>
            <li class="line-head-row">
              Misi
            </li>
            <li class="line-price-row">
            </li>
            <li>
               <ol type="1">
                  <li>PENINGKATAN KEIMANAN DAN KETAQWAAN KEPADA TUHAN YANG MAHA ESA,  SEHINGGA TERBENTUK WARGA SEKOLAH YANG BERAKHLAKUL KARIMAH.</li>
                  <li>MEMPERBAIKI PELAKSANAAN MANAJEMEN BERBASIS SEKOLAH.</li>
                  <li>MENINGKATKAN SIKAP DISIPLIN DAN TERTIB SELURUH WARGA SEKOLAH.</li>
                  <li>MEMBANGUN KARAKTER YANG MANTAP SESUAI KULTUR SEKOLAH.</li>
                  <li>MENINGKATKAN KOMPETENSI BERBASIS BAHASA INGGRIS.</li>
                  <li>BERPARTISIPASI DALAM KEHIDUPAN BERMASYARAKAT, BERBANGSA, DAN BERNEGARA</li>
                </ol>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- spacer section:testimonial -->
  <section id="testimonials-2" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial pad-top40 pad-bot40 clearfix">
              <h5>
                Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae
                fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus
                suscipit.Nunc velit risus, dapibus non interdum.
              </h5>
              <br />
              <span class="author">&mdash; Perputakaan SMAN 2 Sidoarjo</span>
            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia
              non numquam.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Web Design</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".photography">Photography</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".print">Print</a></li>
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                    <img src="<?php echo base_url('assets/home/img/portfolio/perpus1.jpg');?>" alt="welcome" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 1</a></h5>
                      <a href="img/portfolio/1.jpg');?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="<?php echo base_url('assets/home/img/portfolio/perpus2.jpg');?>" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 2</a></h5>
                      <a href="img/portfolio/2.jpg');?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>


              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="<?php echo base_url('assets/home/img/portfolio/perpus3.jpg');?>" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 3</a></h5>
                      <a href="img/portfolio/3.jpg');?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft">
                    <img src="<?php echo base_url('assets/home/img/portfolio/perpus4.jpg');?>" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 4</a></h5>
                      <a href="img/portfolio/4.jpg');?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="<?php echo base_url('assets/home/img/portfolio/perpus5.jpg');?>" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 5</a></h5>
                      <a href="img/portfolio/5.jpg');?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="<?php echo base_url('assets/home/img/portfolio/perpus6.jpg');?>" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 6</a></h5>
                      <a href="img/portfolio/6.jpg');?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft">
                    <img src="<?php echo base_url('assets/home/img/portfolio/perpus7.jpg');?>" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 7</a></h5>
                      <a href="img/portfolio/7.jpg');?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="<?php echo base_url('assets/home/img/portfolio/perpus8.jpg');?>" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 8</a></h5>
                      <a href="img/portfolio/8.jpg');?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="<?php echo base_url('assets/home/img/portfolio/perpus8.jpg');?>" alt="" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Project name 9</a></h5>
                      <a href="img/portfolio/9.jpg');?>" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>
            </div>

          </div>


        </div>
      </div>

    </div>
  </section>
  <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">
    <div class="align-center pad-top40 pad-bot30">
      <h4 class="color-white pad-top50">The middle of that asteroid field</h4>
      <p class="color-white">We can repair any dings and scrapes to your spacecraft and support,Planning a time travel
        trip to the middle ages Feugiat accumsan Suspendisse eget Duis faucibus tempus pede pede augue pede.Dapibus
        mollis dignissim suscipit porta justo nisl amet
        Nunc quis semper.</p>
    </div>
  </section>

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            
            <li><a href="https://facebook.com/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://gmail.com/" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="https://instagram.com/" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            
          </ul>
        </div>
      </div>

      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>&copy; Perpustakaan SMAN 2 Sidoarjo</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
            -->
            Develop By <a href="<?php echo site_url("")?>"> Ikhsan's Group</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/css/isotope.css');?>" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url('assets/home/js/fancybox/jquery.fancybox.css');?>" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url('assets/home/css/bootstrap.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/home/css/bootstrap-theme.css');?>">
  <link href="<?php echo base_url('assets/home/css/responsive-slider.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/home/css/animate.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/home/css/style.css');?>">


  <script src="<?php echo base_url('assets/home/js/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/jquery.easing.1.3.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/jquery.isotope.min.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/jquery.nicescroll.min.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/fancybox/jquery.fancybox.pack.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/skrollr.min.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/jquery.scrollTo.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/jquery.localScroll.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/stellar.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/responsive-slider.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/jquery.appear.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/grid.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/main.js');?>"></script>
  <script src="<?php echo base_url('assets/home/js/wow.min.js');?>"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="contactform/contactform.js"></script>
            
         
        </body>
    </html>
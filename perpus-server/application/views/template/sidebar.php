  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <head>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->

 

  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/icon.css" />
  <!-- <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets2/img/favicon.png"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets2/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
</head>


 <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php  echo base_url()?>assets2/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
          Perpustakaan
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="<?php echo site_url('dashboard');?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('anggota');?>">
              <i class="material-icons">person</i>
              <p>Anggota</p>
            </a>
          </li>

          <li>
          
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span> <i class="material-icons">assignment</i>
           </span> Laporan</a>

           <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-saved"></span><a href="<?php echo site_url('laporan/peminjaman');?>"> Peminjaman</a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <span class="glyphicon glyphicon-save"></span> <a href="<?php echo site_url('laporan/pengembalian');?>"> Pengembalian</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('buku');?>">
              <i class="material-icons">library_books</i>
              <p>Buku</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('dashboard/petugas');?>">
              <i class="material-icons">account_box</i>
              <p>Petugas</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('buku/halaman_kategori');?>">
              <i class="material-icons">books</i>
              <p>Kategori Buku</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('peminjaman/aktif');?>">
              <i class="material-icons">date_range</i>
              <p>Peminjaman Aktif</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('client');?>">
              <i class="material-icons">date_range</i>
              <p>Artikel Online</p>
            </a>
          </li>

          <!--  <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('peminjaman/dataPeminjaman');?>">
              <i class="material-icons">library_books</i>
              <p>Data Peminjaman</p>
            </a>
          </li> -->

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('dashboard/logout');?>">
              <i class="material-icons">power_settings_new</i>
              <p>Logout</p>
            </a>
          </li>

        
          
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
      </div>
    </div>       



  <!--  Google Maps Plugin    -->
  <!-- Chartist JS -->

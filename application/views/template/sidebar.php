    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url('assets/img/logo.png') ?>" alt="picture" class="img-fluid rounded-circle">
            <h2 class="h5">MI ZIYADATUL AHSAN</h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>T</strong><strong class="text-primary">U</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading"><?php print_r($_SESSION['username']); ?></h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="<?php echo base_url('index.php/home/index') ?>"> <i class="icon-home"></i>Home</a></li>
            <li><a href="<?php echo base_url('index.php/guru/daftar_guru') ?>"> <i class="fa fa-user" aria-hidden="true"></i> Master Guru </a></li>
            <li><a href="<?php echo base_url('index.php/siswa/daftar_siswa') ?>"> <i class="fa fa-users" aria-hidden="true"></i> Master Siswa </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i> Transaksi </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url('index.php/laptab/tambah_laptab')?>">Tabungan</a></li>
                <li><a href="<?php echo base_url('index.php/infaq/tambah_infaq')?>">Infaq</a></li>
                <li><a href="<?php echo base_url('index.php/gaji/tambah_gaji')?>">Gaji Guru</a></li>
              </ul>
              <li><a href="#laporanmenu" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i> Laporan </a>
              <ul id="laporanmenu" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url('index.php/laptab/pilih_siswa')?>">Tabungan</a></li>
                <li><a href="<?php echo base_url('index.php/lapinfaq/pilih_siswa')?>">Infaq</a></li>
                <li><a href="<?php echo base_url('index.php/lapgaji/pilih_guru')?>">Gaji Guru</a></li>
              </ul>
              <li><a href="<?php echo site_url('login') ?>"> <i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
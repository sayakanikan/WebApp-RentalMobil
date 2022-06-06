<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a class="nav-link nav-link-lg nav-link-user btn btn-warning">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('nama_admin') ?></div></a>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url('admin/dashboard') ?>">RentalMobil.com</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url('admin/dashboard') ?>">RM</a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link active" href="<?php echo base_url('admin/dashboard')?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('admin/data_mobil')?>"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>
              
              <li><a class="nav-link" href="<?php echo base_url('admin/data_tipe')?>"><i class="fas fa-grip-horizontal"></i> <span>Tipe Mobil</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('admin/data_admin')?>"><i class="fas fa-user-cog"></i> <span>Kelola Admin</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('admin/data_customer')?>"><i class="fas fa-user"></i> <span>Akun Customer</span></a></li>
              
              <li><a class="nav-link" href="<?php echo base_url('admin/data_rekening')?>"><i class="fas fa-dollar-sign"></i> <span>Data Rekening</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('admin/transaksi')?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>
              
              <li><a class="nav-link" href="<?php echo base_url('admin/laporan')?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('auth/logout')?>"><i class="fas fa-sign-out-alt"></i> <span>Log out</span></a></li>

              <li><a class="nav-link" href="<?php echo base_url('auth/ganti_password')?>"><i class="fas fa-lock"></i> <span>Ganti Password</span></a></li>
            </ul>
        </aside>
      </div>
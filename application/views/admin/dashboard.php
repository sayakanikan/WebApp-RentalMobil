      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>

          
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <a href="<?php echo base_url('admin/data_admin')?>">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-user-cog"></i>
                  </div>
                </a>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $admin; ?>
                  </div>
                </div>
              </div>
            </div>
            

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <a href="<?php echo base_url('admin/data_mobil') ?> ">
                  <div class="card-icon bg-danger">
                    <i class="fas fa-car"></i>
                  </div>
                </a>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Mobil</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $mobil; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <a href="<?php echo base_url('admin/data_customer') ?>">
                  <div class="card-icon bg-warning">
                    <i class="fas fa-user"></i>
                  </div>
                </a>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Akun Customer</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $customer; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <a href="<?php echo base_url('admin/transaksi') ?>">
                  <div class="card-icon bg-success">
                    <i class="fas fa-comment-dollar"></i>
                  </div>
                </a>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Rental Masuk</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $transaksi; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success mt-3" role="alert">
                <h4 class="alert-heading">Selamat Datang!</h4>
                <p>Selamat datang,<b> <?php echo $this->session->userdata('nama_admin') ?> </b> pada halaman admin RentalMobil.com anda sekarang mempunyai akses pengelolaan data pada web RentalMobil.com, anda bisa menambah, mengubah, dan menghapus data yang akan di tampilkan ke halaman customer sesuai dengan keinginan anda.</p>
                <hr>
                <p class="mb-0">Mohon gunakan halaman admin ini dengan bijak agar tidak merugikan bagi anda dan customer anda. Terimakasih.</p>
              </div>
            </div>
          </div>
        </section>
      </div>
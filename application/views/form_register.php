<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <?php $this->session->flashdata('pesan8'); ?>
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <p class="navbar-brand">RentalMobil.com</p>
            </div>

            <div class="card card-dark">
              <div class="card-header"><h5>Daftar</h5></div>
              <?php $this->session->flashdata('pesan8'); ?>
              <div class="card-body">
                <form method="post" action="<?php echo base_url('register') ?>">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" class="form-control" name="nama" autofocus placeholder="Nama Lengkap" required>
                        <?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="username" title="Username telah digunakan, Silahkan gunakan username lain." placeholder="Username (Untuk Login)" required>
                        <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
                        <?php $this->session->flashdata('pesan8'); ?>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat, Kelurahan, Kecamatan, Kota, Kode Pos" required>
                        <?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control" required>
                            <option selected disabled hidden>--Pilih Gender--</option>
                            <option value="Laki - laki">Laki - laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?php echo form_error('gender','<span class="text-small text-danger">','</span>') ?>
                    </div>

                    <div class="form-group">
                        <label for="no_telepon">No. Telepon</label>
                        <input id="no_telepon" type="text" class="form-control" name="no_telepon" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="No Telepon" required>
                        <?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
                    </div>

                    <div class="form-group">
                        <label for="no_ktp">No. KTP</label>
                        <input id="no_ktp" type="text" class="form-control" name="no_ktp" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="No KTP" required>
                        <?php echo form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
                    </div>

                    <div class="form-group">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                      <?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
                    </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-lg btn-block">
                      Daftar
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; RentalMobil.com 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
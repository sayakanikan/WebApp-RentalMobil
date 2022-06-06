<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
            <p class="navbar-brand">RentalMobil.com</p>
            </div>

            <div class="card card-dark">
              <div class="card-header"><h5>Login</h5></div>
                <span class="m-2"><?php echo $this->session->flashdata('pesan7') ?></span>
                <?php $this->session->flashdata('pesan'); ?>
              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/login') ?>" >
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus placeholder="Username" required>
                    <?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="Password" required>
                    <?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-2 text-center">
              Belum punya akun? <a class="btn btn-sm btn-warning" href="<?php echo base_url('register') ?>">Buat akun!</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; RentalMobil.com 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
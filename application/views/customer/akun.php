<section class="about" id="about" style="background-color: #fff; margin-top: 90px; margin-bottom: 70px">
    <div class="container mt-5 mb-3 mx-auto">
      <div class="row">
        <?php echo $this->session->flashdata('pesan5') ?>
        <div class="col-md-6 m-auto">
            <div class="d-flex justify-content-center align-items-center flex-wrap flex-column">
            <div class="card-katalog-header">
              <?php foreach($akun as $ac): ?>
              <center>
              <?php if(empty($ac->gambar)){ ?>
                <img data-aos="zoom-in" data-aos-duration="1000" src="<?php echo base_url('assets/img/default.png'); ?>" style="width: 60%">
              <?php }else{ ?>
                <img data-aos="zoom-in" data-aos-duration="1000" src="<?php echo base_url('assets/upload/'.$ac->gambar); ?>" class="mb-4" style="width: 60%; height:200px; object-fit:cover; border-radius:50%;">
              <?php } ?>
              </center>
            </div>
            <a data-aos="zoom-out" data-aos-delay="150" data-aos-offset="0" data-aos-duration="800" href="<?php echo base_url('customer/data_customer/update/').$this->session->userdata('username') ?>" class="btn btn-success text-light mb-4" disabled>
              <i class="fas fa-edit mr-1"></i>
              <small>Ubah Profile</small>
            </a>
            <a data-aos="zoom-out" data-aos-delay="250" data-aos-offset="0" data-aos-duration="1000" href="<?php echo base_url('auth/ganti_password') ?>" class="btn btn-primary text-light mb-4" disabled>
              <small class="fas fa-cog mr-1"></small>
              <small>Ganti Password</small>
            </a>
          </div>
        </div>

        <div class="col-md-6 m-auto">         
          <ul class="list-group shadow-sm" >
            <li class="list-group-item bg-light">
              <h5 data-aos="zoom-in" data-aos-duration="800"><i class="fas fa-fw fa-user mr-1"></i>  Profile User</h5>
            </li>
            <li class="list-group-item" data-aos="fade-down" data-aos-duration="500"><strong>Nama : </strong><?php echo $ac->nama ?></li>
            <li class="list-group-item" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500"><strong>Username : </strong><?php echo $ac->username ?></li>
            <li class="list-group-item" data-aos="fade-down" data-aos-delay="150" data-aos-duration="500"><strong>Alamat : </strong><?php echo $ac->alamat ?></li>
            <li class="list-group-item" data-aos="fade-down" data-aos-delay="250" data-aos-duration="500"><strong>Gender : </strong><?php echo $ac->gender ?></li>
            <li class="list-group-item" data-aos="fade-down" data-aos-delay="350" data-aos-offset="0" data-aos-duration="500"><strong>No. Telepon : </strong><?php echo $ac->no_telepon ?></li>
            <li class="list-group-item" data-aos="fade-down" data-aos-delay="450" data-aos-offset="0" data-aos-duration="500"><strong>No. KTP : </strong><?php echo $ac->no_ktp ?></li>
            <?php endforeach; ?>
          </ul>

        </div>
      </div>
    </div>
  </section>
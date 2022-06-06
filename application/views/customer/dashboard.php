<img src="<?php echo base_url('assets/img/jumbotron.jpg')?>" style="position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  object-fit: cover;
  object-position: 83%;">

<!-- Masthead-->
<header class="masthead" style="position: relative;
  height: 100vh;
  align-content: center;
  row-gap: 3rem;">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold" data-aos="zoom-in" data-aos-duration="500">Sewa Mobil</h1>
                <hr class="divider" data-aos="zoom-out"/>
            </div>
            <div class="col-lg-8 align-self-baseline">
              <p class="text-white-75 mb-5" data-aos="fade-down" data-aos-duration="700">Kami menyediakan berbagai macam tipe mobil, dengan perawatan yang teratur.</p>
              <a class="btn btn-primary btn-xl" href="#about" data-aos="zoom-out" data-aos-duration="1500">Lihat Mobil</a>
            </div>
        </div>
    </div>
</header>

<body>
  <section id="about">
    <div class="row gx-4 gx-lg-5 mx-auto mb-3">
        <div class="container px-4 px-lg-5 text-center">
          <h2 class="text-black font-weight-bold mt-4" data-aos="zoom-in">Daftar Mobil</h2>
          <p class="d-block text-black-50 mb-4" data-aos="zoom-in" data-aos-duration="700">
            Data ini dapat berubah sewaktu - waktu.
          </p>
        </div>
    </div>

    <div class="container">
      <div class="row mt-4">
        <?php foreach($mobil as $mb) : ?>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="card" data-tilt>
            <a href="#"><img width="120px" height="220px" class="card-img-top" style="transform: translateZ(20px)" src="<?php echo base_url('assets/upload/'.$mb->gambar) ?>" alt=""></a>
            <div class="card-body">
              <h3 class="font-weight-bold"><?php echo $mb->merk ?></h3>
              <h6>Rp. <?php echo number_format($mb->harga,0,',','.') ?> / Hari</h6>
              <p class="text-black-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, fugiat.</p>
              <?php 
              if($mb->status == "0"){
                echo "<span class='btn btn-sm btn-danger disabled'>Tidak Tersedia</span>";
              }else{
                echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil, '<button class="btn btn-sm btn-success">Rental</button>');
              }
              ?>
              <a class="btn btn-sm btn-primary" href="<?php echo base_url('customer/dashboard/detail_mobil/').$mb->id_mobil ?>">Detail</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
      <!-- /.row -->


    <!-- /.col-lg-9 -->

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
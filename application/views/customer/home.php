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
                <h1 class="text-white font-weight-bold" data-aos="zoom-in" data-aos-duration="700">Rental Mobil</h1>
                <hr class="divider" data-aos="zoom-out"/>
            </div>
            <div class="col-lg-8 align-self-baseline" data-aos="fade-down" data-aos-delay="200" data-aos-duration="800">
                <p class="text-white-75 mb-5">RentalMobil.com merupakan sebuah aplikasi yang dibagun dengan tujuan untuk mempermudah transaksi sewa mobil.</p>
            </div>
        </div>
    </div>
</header>

<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-around mb-4">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0" data-aos="zoom-in" data-aos-duration="700">Tentang Kami</h2>
                <hr class="divider divider-light" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"/>
            </div>
        </div>
        <div class="row justify-content-around mb-4">
            <div class="col-md-4 justify-content-center">
                <div style="display: flex; column-gap: 1rem; align-items: center; justify-content: center;">
                    <div style="overflow: hidden;">
                        <img src="<?php echo base_url('assets/img/aldi.jpeg')?>" width="180px" data-aos="zoom-in">
                    </div>

                    <div style="overflow: hidden;">
                        <img src="<?php echo base_url('assets/img/irpan.jpg')?>" width="150px" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="700">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <p class="text-white-75" data-aos="fade-right">Developer dari webapp ini merupakan team yang beranggotakan 2 orang mahasiswa semester 5 Universitas Dian Nuswantoro Semarang.</p>
                <a class="btn btn-light btn-xl" href="<?php echo base_url('customer/dashboard/about') ?>" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">Lebih banyak</a>
            </div>
        </div>
    </div>
</section>

<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0" data-aos="zoom-in" data-aos-duration="700">Layanan kami</h2>
        <hr class="divider" data-aos="fade-right" data-aos-duration="1000"/>
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2" data-aos="fade-up" data-aos-delay="50"><i class="bi-person fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2" data-aos="fade-up" data-aos-delay="100">Driver</h3>
                    <p class="text-muted mb-0" data-aos="fade-up" data-aos-delay="150">Ingin sewa mobil dengan driver atau menyetir sendiri?</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5" data-aos-duration="700">
                    <div class="mb-2" data-aos="fade-up" data-aos-delay="200"><i class="bi-geo-alt fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2" data-aos="fade-up" data-aos-delay="250">Lokasi</h3>
                    <p class="text-muted mb-0" data-aos="fade-up" data-aos-delay="300">Mobil bisa langsung diantar ke lokasi anda!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2" data-aos="fade-up" data-aos-delay="200"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2" data-aos="fade-up" data-aos-delay="250">Akses</h3>
                    <p class="text-muted mb-0" data-aos="fade-up" data-aos-delay="300">Akses dengan mudah dari mana saja dan kapan saja. Terbuka 24 jam!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2" data-aos="fade-up" data-aos-delay="50"><i class="bi-cash fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2" data-aos="fade-up" data-aos-delay="100">Pembayaran</h3>
                    <p class="text-muted mb-0" data-aos="fade-up" data-aos-delay="150">Pembayaran mudah dan aman melalui RentalMobil.com!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action-->
<section class="page-section bg-dark text-white">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4" data-aos="fade-down" data-aos-duration="500">Mulai Rental Sekarang!</h2>
        <a class="btn btn-light btn-xl" href="<?php echo base_url('customer/dashboard/mobil') ?>" data-aos="zoom-in" data-aos-duration="1000">Rental Mobil</a>
    </div>
</section>
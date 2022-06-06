<div class="container mt-3 mb-3">
    <?php foreach($customer as $cs) : ?>
        <form method="post" action="<?php echo base_url('customer/data_customer/update_customer_aksi') ?>">
            <div class="row" >
                <div class="col-md-6" style="margin-top: 50px">
                    <div class="alert alert-info mb-4" role="alert" data-aos="fade-right" data-aos-delay="200" data-aos-duration="700">
                        <h4 class="alert-heading">Pemberitahuan</h4>
                        Isi semua field tersebut dengan benar dan jelas.
                    </div>
                    <div class="d-flex justify-content-center align-items-center flex-wrap flex-column">
                        <div class="card-katalog-header" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="900">
                        <center>
                            <?php if(empty($ac->gambar)){ ?>
                                <img src="<?php echo base_url('assets/img/default.png'); ?>" style="width: 60%">
                            <?php }else{ ?>
                                <img src="<?php echo base_url('assets/upload/'.$ac->gambar); ?>" class="mb-4" style="width: 60%; height:200px; object-fit:cover; border-radius:50%;">
                            <?php } ?>
                        </center>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3" data-aos="fade-down" data-aos-delay="500" data-aos-duration="700">Simpan</button>
                        <a href="<?php echo base_url('customer/dashboard/akun/').$this->session->userdata('username'); ?>" type="submit" class="btn btn-danger ml-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration="700">Batal</a>
                    </div>
                </div>
            
                <div class="col-md-6 " style="margin-top: 50px">
                    <ul class="list-group shadow-sm" >
                        <li class="list-group-item bg-light animasi">
                            <h5><i class="fas fa-book mr-1"></i>  Form Ubah Profile</h5>
                        </li>
                    <div class="form-group animasi">
                        <label class="list-group-item bg-light">Nama</label>
                        <input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
                        <input type="hidden" name="password" value="<?php echo $cs->password ?>">
                        <input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
                        <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group animasi">
                        <label class="list-group-item bg-light">Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $cs->username ?>">
                        <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group animasi">
                        <label class="list-group-item bg-light">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
                        <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group animasi">
                        <label class="list-group-item bg-light">Gender</label>
                        <select name="gender" class="form-control">
                            <option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
                            <option value="<?php 
                                    if($cs->gender == "Laki - laki"){
                                        echo "Perempuan";
                                    }else{
                                        echo "Laki - laki";
                                    }
                                ?>">
                                <?php 
                                    if($cs->gender == "Laki - laki"){
                                        echo "Perempuan";
                                    }else{
                                        echo "Laki - laki";
                                    }
                                ?>
                            </option>
                        </select>
                        <?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group animasi">
                        <label class="list-group-item bg-light">No. Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" value="<?php echo $cs->no_telepon ?>">
                        <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
                    </div>
                
                    <div class="form-group animasi" data-aos-offset="0">
                        <label class="list-group-item bg-light">No. KTP</label>
                        <input type="text" name="no_ktp" class="form-control" value="<?php echo $cs->no_ktp ?>">
                        <?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group animasi" data-aos-offset="0">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                
                    </ul>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
</div>

<script>
    const cardTop = document.querySelectorAll(".animasi");

    cardTop.forEach((animasi, i) => {
        animasi.dataset.aos = "fade-left";
        animasi.dataset.aosDelay = i * 50;
        animasi.dataset.aosDuration = 1500;
    });
</script>
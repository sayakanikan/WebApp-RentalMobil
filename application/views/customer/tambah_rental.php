<div class="container">
    <div class="card mt-5 mb-2 border-0">
        <div class="alert alert-info" role="alert" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="700">
            Penambahan harga untuk sewa driver sebesar Rp. 100.000/hari.
        </div>
        
        <div class="alert alert-info" role="alert" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="700">
            Denda akan diberlakukan setelah lebih dari 24 jam dari tanggal kembali.
        </div>
        
        <div class="card-header" data-aos="fade-down" data-aos-duration="500">
            <h4>Form Rental Mobil</h4>
        </div>

        <div class="card-body">
            <?php foreach($detail as $dt): ?>
                <form method="post" action="<?php echo base_url('customer/rental/tambah_rental_aksi') ?>">
                
                    <div class="form-group mb-2" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500" >
                        <label>Harga Sewa/Hari</label>
                        <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                        <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga?>" readonly>
                    </div>

                    <div class="form-group mb-2" data-aos="fade-down" data-aos-delay="100" data-aos-duration="500">
                        <label>Denda/Hari</label>
                        <input type="text" name="denda" class="form-control" value="<?php echo $dt->denda?>" readonly>
                    </div>

                    <div class="form-group mb-2" data-aos="fade-down" data-aos-delay="150" data-aos-duration="500">
                        <label>Tanggal Rental</label>
                        <input type="date" name="tanggal_rental" class="form-control">
                    </div>

                    <div class="form-group mb-2" data-aos="fade-down" data-aos-delay="200" data-aos-duration="500" data-aos-offset="0">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>

                    <div class="form-group mb-2" data-aos="fade-down" data-aos-delay="250" data-aos-duration="500" data-aos-offset="0">
                        <label>Driver</label>
                        <select name="supir" class="form-control">
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success mt-2" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500" data-aos-offset="0">Rental</button>
                    <a href="<?php echo base_url('customer/dashboard/mobil') ?>" class="btn btn-sm btn-danger mt-2" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="700" data-aos-offset="0">Kembali</a>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="container mb-5 mt-5 px-4 px-lg-5">
    <div class="card border-0">
        <div class="card-body">
            <div class="alert alert-info" role="alert" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="700">
                Untuk sewa driver akan dikenakan harga Rp.100.000/hari.
            </div>
            <?php foreach($detail as $dt) : ?>
                <div class="row">
                    <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                        <img class="ml-4 mt-4" width="400px" src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>">
                    </div>
                    <div class="col-md-6">
                        <table class="table borderless">
                            <tr data-aos="fade-down" data-aos-duration="500">
                                <th>Merk</th>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">
                                <th>No Plat</th>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="100" data-aos-duration="500">
                                <th>Warna</th>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="150" data-aos-duration="500">
                                <th>Tahun</th>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>
                            <tr>
                                <th>Transmisi</th>
                                <td>
                                    <?php 
                                        if($dt->auto == "1"){
                                            echo "Matic";
                                        }else{
                                            echo "Manual";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Tipe Mesin</th>
                                <td>
                                    <?php 
                                        if($dt->disel == "1"){
                                            echo "Disel";
                                        }else{
                                            echo "Bensin";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="200" data-aos-duration="500">
                                <th>Harga</th>
                                <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?> / Hari</td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="250" data-aos-duration="500">
                                <th>Denda</th>
                                <td>Rp. <?php echo number_format($dt->denda,0,',','.') ?> / Hari</td>
                            </tr >
                            <tr data-aos="fade-down" data-aos-delay="350" data-aos-duration="500">
                                <th>Status</th>
                                <td>
                                    <?php 
                                        if($dt->status == "0"){
                                            echo "<span class='btn btn-sm btn-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='btn btn-sm btn-success'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php 
                                    if($dt->status == "0"){
                                    echo "<span class='btn btn-sm btn-secondary disabled mt-3' data-aos='zoom-in' data-aos-offset='0' data-aos-delay='400' data-aos-duration='500'>Rental</span>";
                                    }else{
                                    echo anchor('customer/rental/tambah_rental/'.$dt->id_mobil, '<span class="btn btn-sm btn-success mt-3" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0" data-aos-duration="500">Rental</span>');
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-danger mt-3" data-aos="zoom-in" data-aos-delay="400" data-aos-offset="0" data-aos-duration="500" href="<?php echo base_url('customer/dashboard/mobil') ?>">Kembali</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
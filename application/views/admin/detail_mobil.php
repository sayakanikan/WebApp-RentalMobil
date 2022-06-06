<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Mobil</h1>
        </div>
    </section>

    <?php foreach($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5 mt-5">
                        <img width="400px" src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <th>Tipe Mobil</th>
                                <td>
                                    <?php foreach($tipe as $tp) :?>
                                        <?php 
                                            if($tp->kode_tipe == $dt->kode_tipe){
                                                echo $tp->nama_tipe;
                                                break;
                                            }
                                        ?>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Merk Mobil</th>
                                <td><?php echo $dt->merk ?></td>
                            </tr>
                            <tr>
                                <th>No. Plat</th>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>
                            <tr>
                                <th>Transmisi</th>
                                <td>
                                    <?php 
                                        if($dt->auto == "0"){
                                            echo "Manual";
                                        }else{
                                            echo "Matic";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Mesin</th>
                                <td>
                                    <?php 
                                        if($dt->disel == "0"){
                                            echo "Bensin";
                                        }else{
                                            echo "Disel";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>Rp. <?php echo number_format($dt->harga,0,',','.') ?> / Hari</td>
                            </tr>
                            <tr>
                                <th>Denda</th>
                                <td>Rp. <?php echo number_format($dt->denda,0,',','.') ?> / Hari</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <?php 
                                        if($dt->status == "0"){
                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                        }else{
                                            echo "<span class='badge badge-success'>Tersedia</span>";
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>

                        <a href="<?php echo base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>" class="btn btn-sm btn-primary ml-4">Update</a>
                        <a href="<?php echo base_url('admin/data_mobil') ?>" class="btn btn-sm btn-danger ml-2">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
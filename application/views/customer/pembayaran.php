<div class="container mt-5 mb-5">
    <div class="alert alert-info" role="alert" data-aos="zoom-out" data-aos-delay="400" data-aos-duration="700">
        Print Invoice setelah pembayaran terkonfirmasi untuk mengambil mobil rental.
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert alert-primary">
                    <h5 data-aos="zoom-in" data-aos-delay="200" data-aos-duration="700">Invoice Pembayaran Anda</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach($transaksi as $tr): ?>
                            <tr data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">
                                <th>Merk Mobil</th>
                                <td>:</td>
                                <td><?php echo $tr->merk ?></td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="100" data-aos-duration="500">
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ?></td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="150" data-aos-duration="500">
                                <th>Tanggal Kembali</th>
                                <td>:</td>
                                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="200" data-aos-duration="500">
                                <th>Biaya Sewa/Hari</th>
                                <td>:</td>
                                <td>Rp.<?php echo number_format($tr->harga,0,',','.') ?></td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="250" data-aos-duration="500">
                                <?php 
                                    $x = strtotime($tr->tanggal_kembali);
                                    $y = strtotime($tr->tanggal_rental);
                                    $jml_hari = abs(($x-$y)/(60*60*24));
                                ?>
                                <th>Jumlah Hari Sewa</th>
                                <td>:</td>
                                <td><?php echo $jml_hari ?> Hari</td>
                            </tr>
                            <tr data-aos="fade-down" data-aos-delay="300" data-aos-duration="500">
                                <th>Driver</th>
                                <td>:</td>
                                <td>
                                    <?php 
                                        if($tr->supir == "0"){
                                            echo "Tidak";
                                        }else{
                                            echo "Ya";
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr class="text-success" data-aos="fade-down" data-aos-delay="350" data-aos-offset="0" data-aos-duration="500">
                                <th>Jumlah Pembayaran</th>
                                <td>:</td>
                                <td><button class="btn btn-sm btn-success">Rp. <?php
                                if($tr->supir == "0"){
                                    echo number_format($tr->harga * $jml_hari,0,',','.');
                                }else{
                                    echo number_format($tr->harga * $jml_hari + $jml_hari * 100000,0,',','.');
                                }  ?></button></td>
                            </tr>
                            <tr data-aos="zoom-out" data-aos-delay="450" data-aos-offset="0" data-aos-duration="800">
                                <td></td>
                                <td></td>
                                <td>
                                    <?php if(empty($tr->bukti_pembayaran) || empty($tr->foto_ktp) || $tr->status_pembayaran == '0'){ ?>
                                        <button class="btn btn-sm btn-secondary" disabled>Print Invoice</button>
                                    <?php }else{ ?>
                                        <a href="<?php echo base_url('customer/transaksi/cetak_invoice/').$tr->id_rental ?>" class="btn btn-sm btn-primary">Print Invoice</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header alert alert-success">
                    <h5 data-aos="zoom-in" data-aos-delay="200" data-aos-duration="700">Informasi Pembayaran</h5>
                </div>
                <div class="card-body">
                    <p data-aos="fade-down" data-aos-delay="200" data-aos-duration="500">Silahkan melakukan pembayaran melalui nomor rekening di bawah ini.</p>
                </div>

                <?php foreach($rekening as $rek): ?>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500"><?php echo $rek->nama_bank ?> - <?php echo $rek->no_rekening ?> a/n <?php echo $rek->nama_rekening ?> </li>
                    </ul>
                <?php endforeach; ?>

                <?php if(empty($tr->bukti_pembayaran) || empty($tr->foto_ktp)){ ?>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-aos="zoom-in" data-aos-duration="900" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Upload Bukti Pembayaran dan Foto KTP
                    </button>
                <?php }elseif(!empty($tr->foto_ktp) && $tr->status_pembayaran == "0") { ?>
                    <button class="btn btn-warning" data-aos="zoom-in" data-aos-duration="900" ><i class="fas fa-clock"></i> Menunggu Konfirmasi</button>
                <?php }elseif(!empty($tr->foto_ktp) && $tr->status_pembayaran == "1") { ?>
                    <button class="btn btn-success" data-aos="zoom-in" data-aos-duration="900"><i class="fa fa-check"></i> Pembayaran Selesai</button>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="form-group">
                <label class="mb-2">Upload Bukti Pembayaran</label>
                <input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental?>">
                <input type="file" name="bukti_pembayaran" class="form-control">
            </div>
            <div class="form-group">
                <label class="mb-2">Upload Foto KTP Anda</label>
                <input type="file" name="foto_ktp" class="form-control">
            </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Upload</button>
      </div>
      </form>
    </div>
  </div>
</div>
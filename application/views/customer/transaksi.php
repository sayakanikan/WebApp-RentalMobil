<div class="container" style="margin-bottom: 100px">
    <div class="card mx-auto border-0" style="margin-top: 180px; width: 90%">
        <div class="card-header border-0">
        <?php echo $this->session->flashdata('pesan6') ?>
            <h5 data-aos="zoom-out" data-aos-duration="700">Data Transaksi Anda</h5>
        </div>
        <div class="card-body">
            <table class="table table bordered table-striped">
                <tr data-aos="fade-down" data-aos-delay="100" data-aos-duration="500">
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Merk Laptop</th>
                    <th>No. Plat</th>
                    <th>Harga Sewa</th>
                    <th>Driver</th>
                    <th>Pembayaran</th>
                    <th>Batal Transaksi</th>
                </tr>
                <?php $no=1; foreach($transaksi as $tr): ?>
                    <tr>
                        <td data-aos="fade-down" data-aos-delay="150" data-aos-offset="0" data-aos-duration="800"><?php echo $no++ ?></td>
                        <td data-aos="fade-down" data-aos-delay="250" data-aos-offset="0" data-aos-duration="800"><?php echo $tr->nama ?></td>
                        <td data-aos="fade-down" data-aos-delay="350" data-aos-offset="0" data-aos-duration="800"><?php echo $tr->merk ?></td>
                        <td data-aos="fade-down" data-aos-delay="450" data-aos-offset="0" data-aos-duration="800"><?php echo $tr->no_plat ?></td>
                        <td data-aos="fade-down" data-aos-delay="550" data-aos-offset="0" data-aos-duration="800">Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
                        <td data-aos="fade-down" data-aos-delay="650" data-aos-offset="0" data-aos-duration="800">
                            <?php 
                                if($tr->supir == "0"){
                                    echo "Tidak";
                                }else{
                                    echo "Ya";
                                }
                            ?>
                        </td>
                        <td data-aos="fade-down" data-aos-delay="750" data-aos-offset="0" data-aos-duration="800">
                            <?php if($tr->status_rental == "Selesai"){?>
                                <button class="btn btn-sm btn-primary">Rental Selesai</button>
                            <?php }else{ ?>
                                <a href="<?php echo base_url('customer/transaksi/pembayaran/').$tr->id_rental ?>" class="btn btn-sm btn-success">Cek Pembayaran</a><br>
                            <?php } ?>
                        </td>
                        <td data-aos="fade-down" data-aos-delay="850" data-aos-offset="0" data-aos-duration="800">
                            <?php if($tr->status_rental == "Selesai"){?>
                                <button class="btn btn-sm btn-secondary">Selesai</button>
                            <?php }elseif($tr->status_pembayaran == '1'){ ?>
                                <button class="btn btn-sm btn-light">Dalam Rental</button>
                            <?php }else{ ?>
                                <a onclick="return confirm('Anda yakin akan membatalkan transaksi ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/').$tr->id_rental ?>">Batal</a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
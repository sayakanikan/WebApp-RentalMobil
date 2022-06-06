<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>
        <?php $this->session->flashdata('pesan9'); ?>
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Merk Mobil</th>
                <th>Tanggal Rental</th>
                <th>Tanggal Kembali</th>
                <th>Harga/Hari</th>
                <th>Denda/Hari</th>
                <th>Total Denda</th>
                <th>Driver</th>
                <th>Tgl. Dikembalikan</th>
                <th>Status Pengembalian</th>
                <th>Status Rental</th>
                <th>Cek Pembayaran</th>
                <th>Selesai/Batal</th>
            </tr>

            <?php 
            $no = 1;
            foreach($transaksi as $tr): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tr->nama ?></td>
                    <td><?php echo $tr->merk ?></td>
                    <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ?></td>
                    <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
                    <td>Rp. <?php echo number_format($tr->harga),0,',','.' ?></td>
                    <td>Rp. <?php echo number_format($tr->denda),0,',','.' ?></td>
                    <td>
                        <?php 
                            if(empty($tr->total_denda)){
                                echo "Rp. 0";
                            }elseif($tr->total_denda == "0"){
                                echo "Rp. 0";
                            }else{
                                echo "Rp. ", number_format($tr->total_denda),0,',','.';
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($tr->supir == "0"){
                                echo "Tidak";
                            }else{
                                echo "Ya";
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($tr->tanggal_pengembalian == "0000-00-00"){
                                echo "-";
                            }else{
                                echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($tr->status_pengembalian == "Kembali"){
                                echo "Kembali";
                            }else{
                                echo "Belum Kembali";
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($tr->status_rental == "Selesai"){
                                echo "Selesai";
                            }else{
                                echo "Belum Selesai";
                            }
                        ?>
                    </td>
                    <td>
                        <center>
                            <?php if(empty($tr->bukti_pembayaran) || empty($tr->foto_ktp)){ ?>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                            <?php }elseif($tr->status_pembayaran == "1"){ ?>
                                <button class="btn btn-sm btn-secondary"><i class="fa fa-check-circle"></i></button>
                            <?php }else{ ?>
                                <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/transaksi/pembayaran/').$tr->id_rental ?>" >Konfirmasi</a>
                            <?php } ?>
                        </center>
                    </td>
                    <td>
                        <?php if($tr->status_pembayaran == "1" && $tr->status_rental == "Selesai" && $tr->status_pengembalian == "Kembali"){ ?>
                            <button class="btn btn-sm btn-secondary">Selesai</button>
                        <?php }elseif($tr->status_pembayaran == '0'){ ?>
                            <button class="btn btn-sm btn-secondary"><i class="fas fa-check"></i></button>
                            <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal/').$tr->id_rental ?>"><i class="fas fa-times"></i></a>
                        <?php }else{ ?>
                            <a class="btn btn-sm btn-success" disabled href="<?php echo base_url('admin/transaksi/transaksi_selesai/').$tr->id_rental ?>"><i class="fas fa-check"></i></a>
                            <a onclick="return confirm('Anda yakin akan membatalkan transaksi ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/transaksi_batal/').$tr->id_rental ?>"><i class="fas fa-times"></i></a> 
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</div>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Transaksi</h1>
        </div>
    </section>
    <form method="post" action="<?php echo base_url('admin/laporan') ?>">
        <div class="form-group">
            <label>Dari tanggal</label>
            <input type="date" name="dari" class="form-control">
            <?php echo form_error('dari', '<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Sampai tanggal</label>
            <input type="date" name="sampai" class="form-control">
            <?php echo form_error('sampai', '<span class="text-small text-danger">','</span>') ?>
        </div>

        <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Tampilkan</button>
    </form>

    <div class="btn-group">
        <a class="btn btn-sm btn-dark mt-5" target="_blank" href="<?php echo base_url().'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print"></i> Print Laporan</a>
    </div>

    <table class="table table-bordered table-striped table-responsive mt-3">
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
            </tr>

            <?php 
            $no = 1;
            foreach($laporan as $tr): ?>
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
                </tr>
            <?php endforeach; ?>
        </table>
</div>
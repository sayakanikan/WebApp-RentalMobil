<h3 style="text-align: center; margin-top:20px">Laporan Transaksi Rental Laptop</h3>

<table class="mt-5">
    <tr>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y', strtotime($_GET['dari']));?></td>
    </tr>
    <tr>
        <td>Sampai Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y', strtotime($_GET['sampai']));?></td>
    </tr>
</table>

<table class="table table-bordered table-striped mt-3">
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

<footer class="bg-light py-5" style="margin-top: 280px">
    <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - RentalMobil.com</div></div>
</footer>
<script type="text/javascript">
    window.print();
</script>
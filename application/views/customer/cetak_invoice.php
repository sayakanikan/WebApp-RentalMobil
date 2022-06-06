<table style="width: 60%">
    <h2>Invoice Pembayaran Anda</h2>
    <?php foreach($transaksi as $tr): ?>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
        </tr>
        <tr>
            <td>Merk Mobil</td>
            <td>:</td>
            <td><?php echo $tr->merk ?></td>
        </tr>
        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ?></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
        </tr>
        <tr>
            <td>Biaya Sewa/Hari</td>
            <td>:</td>
            <td>Rp.<?php echo number_format($tr->harga,0,',','.') ?></td>
        </tr>
        <tr>
            <?php 
                $x = strtotime($tr->tanggal_kembali);
                $y = strtotime($tr->tanggal_rental);
                $jml_hari = abs(($x-$y)/(60*60*24));
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?php echo $jml_hari ?> Hari</td>
        </tr>
        <tr>
            <td>Driver</td>
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

        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td>
                <?php 
                    if($tr->status_pembayaran == "0"){
                        echo "Belum Lunas";
                    }else{
                        echo "Lunas";
                    }
                ?>
            </td>
        </tr>

        <tr style="font-weight: bold; color: red;">
            <td>Jumlah Pembayaran</td>
            <td>:</td>
            <td>Rp. <?php
            if($tr->supir == "0"){
                echo number_format($tr->harga * $jml_hari,0,',','.');
            }else{
                echo number_format($tr->harga * $jml_hari + 50000,0,',','.');
            }  ?></td>
        </tr>

        <tr>
            <td>Bukti Pembayaran</td>
            <td>:</td>
            <td>
                <img width="200px" src="<?php echo base_url().'assets/upload/'.$tr->bukti_pembayaran ?>">
            </td>
        </tr>

        <tr>
            <td>Foto KTP</td>
            <td>:</td>
            <td>
                <img width="200px" src="<?php echo base_url().'assets/upload/'.$tr->foto_ktp ?>">
            </td>
        </tr>
    <?php endforeach; ?>
    <p style="font-weight: bold; color: blue">---Mohon Print dan Simpan Invoice ini untuk mengambil mobil rental.---</p>
</table>

<script type="text/javascript">
    window.print();
</script>
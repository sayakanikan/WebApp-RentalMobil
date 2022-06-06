<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Rekening</h1>
        </div>

        <a href="<?php echo base_url('admin/data_rekening/tambah_rekening')?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i>     Tambah Rekening</a>
        
        <?php echo $this->session->flashdata('pesan3') ?>
        
        <div class="alert alert-info" role="alert">
            Data no. rekening yang tertera disini akan digunakan sebagai rekening pembayaran.
        </div>

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemilik</th>
                    <th>Nama Bank</th>
                    <th>No. Rekening</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach($rekening as $rek) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $rek->nama_rekening ?></td>
                        <td><?php echo $rek->nama_bank ?></td>
                        <td><?php echo $rek->no_rekening ?></td>
                        <td>
                            <a href="<?php echo base_url("admin/data_rekening/update_rekening/").$rek->id_rekening ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url("admin/data_rekening/delete_rekening/").$rek->id_rekening ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>                        
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>
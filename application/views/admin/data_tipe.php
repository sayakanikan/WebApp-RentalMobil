<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Tipe Mobil</h1>
        </div>
    </div>

    <a href="<?php echo base_url('admin/data_tipe/tambah_tipe')?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i>     Tambah Tipe</a>

    <?php echo $this->session->flashdata('pesan4') ?>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th width="20px">No</th>
                <th>Kode Tipe</th>
                <th>Nama Tipe</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            $no=1;
            foreach($tipe as $tp) :
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tp->kode_tipe ?></td>
                    <td><?php echo $tp->nama_tipe ?></td>
                    <td>
                        <a href="<?php echo base_url("admin/data_tipe/update_tipe/").$tp->id_tipe ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="<?php echo base_url("admin/data_tipe/delete_tipe/").$tp->id_tipe ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
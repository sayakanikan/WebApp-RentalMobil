<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Admin</h1>
        </div>

        <a href="<?php echo base_url('admin/data_admin/tambah_admin')?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i>     Tambah Admin</a>
        <?php $this->session->flashdata('pesann') ?>
        <table class="table table-striped table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
            </tr>

            <?php
            $no = 1;
            foreach($admin as $min) :
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $min->nama_admin ?></td>
                    <td><?php echo $min->username ?></td>
                    <td><?php echo $min->password ?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url("admin/data_admin/update_admin/").$min->id_admin ?>"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_admin/delete_admin/').$min->id_admin ?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

    </section>
</div>
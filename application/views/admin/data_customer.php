<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Customer</h1>
        </div>
        
        <?php echo $this->session->flashdata('pesan1') ?>

        <table class="table table-striped table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Gender</th>
                <th>No Telepon</th>
                <th>Aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach($customer as $cs) :
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $cs->nama ?></td>
                    <td><?php echo $cs->username ?></td>
                    <td><?php echo $cs->gender ?></td>
                    <td><?php echo $cs->no_telepon ?></td>
                    <td>
                        <a class="btn btn-sm btn-success" href="<?php echo base_url("admin/data_customer/detail_customer/").$cs->id_customer ?>"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url("admin/data_customer/update_customer/").$cs->id_customer ?>"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Anda yakin akan menghapus data customer ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/data_customer/delete_customer/').$cs->id_customer ?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </section>
</div>
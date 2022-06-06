<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Customer</h1>
        </div>
    </section>
    
    <?php foreach($detail as $cs) : ?>
        <div class="card">
            <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nama Customer</th>
                                <td><?php echo $cs->nama ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><?php echo $cs->username ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><?php echo $cs->alamat ?></td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td><?php echo $cs->gender ?></td>
                            </tr>
                            <tr>
                                <th>No. Telepon</th>
                                <td><?php echo $cs->no_telepon ?></td>
                            </tr>
                            <tr>
                                <th>No. KTP</th>
                                <td><?php echo $cs->no_ktp ?></td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td><?php echo $cs->password ?></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="<?php echo base_url("admin/data_customer/update_customer/").$cs->id_customer ?>">Update</a>
                                    <a href="<?php echo base_url('admin/data_customer') ?>" class="btn btn-sm btn-danger ml-2">Kembali</a>
                                </td>
                            </tr>
                        </table>            
            </div>
        </div>
    <?php endforeach; ?>

</div>
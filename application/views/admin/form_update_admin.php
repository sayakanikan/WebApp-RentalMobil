<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Update Data Customer</h1>
        </div>
    </div>

    <div class="alert alert-info" role="alert">
        Untuk penggantian password, Silahkan login akun admin yang ingin diganti password.
    </div>
    <?php foreach($admin as $min) : ?>
        <form method="post" action="<?php echo base_url('admin/data_admin/update_admin_aksi')?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Admin</label>
                        <input type="hidden" name="id_admin" class="form-control" value="<?php echo $min->id_admin ?>">
                        <input type="hidden" name="role_id" class="form-control" value="<?php echo $min->role_id ?>">
                        <input type="hidden" name="password" class="form-control" value="<?php echo $min->password ?>">
                        <input type="text" name="nama_admin" class="form-control" value="<?php echo $min->nama_admin ?>">
                        <?php echo form_error('nama_admin','<div class="text-small text-danger">','</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $min->username ?>">
                        <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('admin/data_admin')?>" type="submit" class="btn btn-danger ml-2">Batal</a>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
</div>
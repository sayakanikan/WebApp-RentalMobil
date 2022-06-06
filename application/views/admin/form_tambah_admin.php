<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Tambah Admin</h1>
        </div>
    </div>

    <form method="post" action="<?php echo base_url('admin/data_admin/tambah_admin_aksi')?>">
        <div class="form-group">
            <label>Nama Admin</label>
            <input type="text" name="nama_admin" class="form-control">
            <?php echo form_error('nama_admin','<div class="text-small text-danger">','</div>') ?>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
            <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo base_url('admin/data_admin')?>" type="submit" class="btn btn-danger ml-2">Batal</a>
    </form>


</div>
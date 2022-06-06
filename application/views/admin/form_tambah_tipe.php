<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Tambah Tipe Mobil</h1>
        </div>
    </div>

    <form method="post" action="<?php echo base_url('admin/data_tipe/tambah_tipe_aksi')?>">
        <div class="form-group">
            <label>Kode Tipe</label>
            <input type="text" name="kode_tipe" class="form-control">
            <?php echo form_error('kode_tipe','<div class="text-small text-danger">','</div>') ?>
        </div>
        <div class="form-group">
            <label>Nama Tipe</label>
            <input type="text" name="nama_tipe" class="form-control">
            <?php echo form_error('nama_tipe','<div class="text-small text-danger">','</div>') ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo base_url('admin/data_tipe')?>" type="submit" class="btn btn-danger ml-2">Batal</a>
    </form>

</div>
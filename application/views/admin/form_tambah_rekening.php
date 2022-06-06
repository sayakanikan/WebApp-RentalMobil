<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Tambah Rekening Bank</h1>
        </div>
    </div>

    <form method="post" action="<?php echo base_url('admin/data_rekening/tambah_rekening_aksi')?>">
        <div class="form-group">
            <label>Bank</label>
            <select name="id_bank" class="form-control">
                <option selected disabled hidden>--Pilih Bank--</option>
                <?php foreach($bank as $ba): ?>
                <option value="<?php echo $ba->id_bank?>"><?php echo $ba->nama_bank ?></option>
                <?php endforeach; ?>
            </select>
            <?php echo form_error('id_bank','<div class="text-small text-danger">','</div>') ?>
        </div>
        <div class="form-group">
            <label>Nama Pemilik Rekening</label>
            <input type="text" name="nama_rekening" class="form-control">
            <?php echo form_error('nama_rekening','<div class="text-small text-danger">','</div>') ?>
        </div>
        <div class="form-group">
            <label>Nomor Rekening</label>
            <input type="text" name="no_rekening" class="form-control">
            <?php echo form_error('no_rekening','<div class="text-small text-danger">','</div>') ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo base_url('admin/data_rekening')?>" type="submit" class="btn btn-danger ml-2">Batal</a>
    </form>

</div>
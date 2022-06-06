<div class="main-content">
  <section class="section">
        <div class="section-header">
            <h1>Form Input Data Mobil</h1>
        </div>
    
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>" enctype="multiplat/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tipe Mobil</label>
                                <select name="kode_tipe" class="form-control" required>
                                    <option selected disabled hidden>--Pilih Tipe--</option>
                                    <?php foreach($tipe as $tp) : ?>
                                        <option value="<?php echo $tp->kode_tipe?>"><?php echo $tp->nama_tipe ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('kode_tipe','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Merk Mobil</label>
                                <input type="text" name="merk" class="form-control" required>
                                <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>No. Plat</label>
                                <input type="text" name="no_plat" class="form-control" required></input>
                                <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text" name="warna" class="form-control" required>
                                <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            
                            <div class="form-group">
                                <label>Transmisi</label>
                                <select name="auto" class="form-control" required>
                                    <option selected disabled hidden>--Pilih Transmisi--</option>
                                    <option value="1">Matic</option>
                                    <option value="0">Manual</option>
                                </select>
                                <?php echo form_error('auto','<div class="text-small text-danger">','</div>') ?>
                            </div>

                            <div class="form-group">
                                <label>Tipe Mesin</label>
                                <select name="disel" class="form-control" required>
                                    <option selected disabled hidden>--Pilih Tipe Mesin--</option>
                                    <option value="1">Disel</option>
                                    <option value="0">Bensin</option>
                                </select>
                                <?php echo form_error('disel','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6">    
                            <div class="form-group">
                                <label>Harga Sewa / Hari</label>
                                <input type="number" name="harga" class="form-control" required>
                                <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>        
                            </div>             
                                      
                            <div class="form-group">
                                <label>Denda</label>
                                <input type="number" name="denda" class="form-control" required>
                                <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>        
                            </div>

                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="number" name="tahun" class="form-control" required>
                                <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>        
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control" required>
                                    <option selected disabled hidden>--Pilih Status--</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control" >
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <a href="<?php echo base_url('admin/data_mobil')?>" type="submit" class="btn btn-danger mt-4 ml-2">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
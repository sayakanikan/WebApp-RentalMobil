<div class="main-content">
  <section class="section">
        <div class="section-header">
            <h1>Form Update Data Mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <?php foreach($mobil as $mb) : ?>
                    <form method="post" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>" enctype="multiplat/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipe Mobil</label>
                                    <input type="hidden" name="id_mobil" class="form-control" value="<?php echo $mb->id_mobil ?>">
                                    <select name="kode_tipe" class="form-control">
                                        <option value="<?php echo $mb->kode_tipe ?>" selected disabled hidden><?php echo $mb->kode_tipe ?></option>
                                        <?php foreach($tipe as $tp) : ?>
                                            <option value="<?php echo $tp->kode_tipe?>"><?php echo $tp->nama_tipe ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('kode_tipe','<div class="text-small text-danger">','</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Merk Mobil</label>
                                    <input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
                                    <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>No.Plat</label>
                                    <input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat ?>"></input>
                                    <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Warna</label>
                                    <input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
                                    <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Transmisi</label>
                                    <select name="auto" class="form-control">
                                        <option <?php if($mb->auto == "1"){echo "selected='selected'";} 
                                        echo $mb->auto; ?> value="1">Matic</option>
                                        <option <?php if($mb->auto == "0") {echo "selected='selected'";} 
                                        echo $mb->auto; ?> value="0">Manual</option>
                                    </select>
                                    <?php echo form_error('auto','<div class="text-small text-danger">','</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Mesin</label>
                                    <select name="disel" class="form-control">
                                        <option <?php if($mb->disel == "1"){echo "selected='selected'";} 
                                        echo $mb->disel; ?> value="1">Disel</option>
                                        <option <?php if($mb->disel == "0") {echo "selected='selected'";} 
                                        echo $mb->disel; ?> value="0">Bensin</option>
                                    </select>
                                    <?php echo form_error('disel','<div class="text-small text-danger">','</div>') ?>
                                </div>                                
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Harga / Hari</label>
                                    <input type="number" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                                    <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>        
                                </div>

                                <div class="form-group">
                                    <label>Denda</label>
                                    <input type="number" name="denda" class="form-control" value="<?php echo $mb->denda ?>">
                                    <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>        
                                </div>

                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
                                    <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>        
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option <?php if($mb->status == "1"){echo "selected='selected'";} 
                                        echo $mb->status; ?> value="1">Tersedia</option>
                                        <option <?php if($mb->status == "0") {echo "selected='selected'";} 
                                        echo $mb->status; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary mt-4">Simpan</button>
                                <a href="<?php echo base_url('admin/data_mobil')?>" type="submit" class="btn btn-sm btn-danger mt-4 ml-2">Batal</a>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
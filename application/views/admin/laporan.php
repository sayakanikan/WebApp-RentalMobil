<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Transaksi</h1>
        </div>
    </section>
    <form method="post" action="<?php echo base_url('admin/laporan') ?>">
        <div class="form-group">
            <label>Dari tanggal</label>
            <input type="date" name="dari" class="form-control">
            <?php echo form_error('dari', '<span class="text-small text-danger">','</span>') ?>
        </div>

        <div class="form-group">
            <label>Sampai tanggal</label>
            <input type="date" name="sampai" class="form-control">
            <?php echo form_error('sampai', '<span class="text-small text-danger">','</span>') ?>
        </div>

        <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Tampilkan</button>
    </form>
</div>
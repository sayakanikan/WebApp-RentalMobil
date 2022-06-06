<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mobil</h1>
        </div>

        <a href="<?php echo base_url('admin/data_mobil/tambah_mobil')?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i>     Tambah Mobil</a>
        
        <?php echo $this->session->flashdata('pesan2') ?>
        
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Tipe</th>
                    <th>Merk Mobil</th>
                    <th>Tahun</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach($mobil as $mb) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                            <img width="60px" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>">
                        </td>
                        <td>
                            <?php foreach($tipe as $tp) :?>
                                <?php 
                                    if($tp->kode_tipe == $mb->kode_tipe){
                                        echo $tp->nama_tipe;
                                        break;
                                    }
                                ?>
                            <?php endforeach; ?>  
                        </td>
                        <td><?php echo $mb->merk ?></td>
                        <td><?php echo $mb->tahun ?></td>
                        <td><?php 
                        if($mb->status == "0"){
                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                        }else {
                            echo"<span class='badge badge-primary'>Tersedia</span>";
                        }
                        ?></td>
                        <td>
                            <a href="<?php echo base_url("admin/data_mobil/detail_mobil/").$mb->id_mobil ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo base_url("admin/data_mobil/update_mobil/").$mb->id_mobil ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url("admin/data_mobil/delete_mobil/").$mb->id_mobil ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>
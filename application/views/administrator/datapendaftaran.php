<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-user-injured"></i> Data Pendaftaran Pasien Rawat Jalan
</div>

<?php echo $this->session->flashdata('pesan') ?>

<?php echo anchor('administrator/datapendaftaran/tambah_datapendaftaran','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Pendaftaran</button>') ?>

<?php echo anchor('administrator/datapendaftaran/excel','<button class="btn btn-sm btn-success mb-3"><i class="fas fa-file-csv"></i> Export Excel</button>')?>

<?php echo anchor('administrator/datapendaftaran/export','<button class="btn btn-sm btn-danger mb-3"><i class="fas fa-file-pdf"></i> Export PDF</button>')?>


    <div class="navbar-form navbar-right">
        <?php echo form_open('administrator/datapendaftaran/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search"><br>
        <button type="submit" class="btn btn-success">Cari</button><br><br>
        <?php echo form_close() ?>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO RM</th>
            <th>NAMA PASIEN</th>
            <th>TANGGAL PENDAFTARAN</th>
            <th>POLI TUJUAN</th>
            <th>STATUS PERIKSA</th>
            <th colspan="4">AKSI</th>
        </tr>

        <?php
        foreach($data_pendaftaran as $dpn) : ?>

        <tr>
            <td><?php echo $dpn->no_rm ?></td>
            <td><?php echo $dpn->nama_pasien ?></td>
            <td><?php echo $dpn->tgl_pendaftaran ?></td>
            <td><?php echo $dpn->id_poliklinik ?></td>
            <td><?php echo $dpn->status_periksa ?></td>
            <td width="20px"><?php echo anchor('administrator/datapendaftaran/periksa_selesai/'.$dpn->id_pendaftaran,'<div class="btn btn-sm btn-success"><i class="fas fa-check-circle" data-toggle="tooltip" title="Selesai"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/datapendaftaran/detail/'.$dpn->id_pendaftaran,'<div class="btn btn-sm btn-info"><i class="fa fa-eye" data-toggle="tooltip" title="View"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/datapendaftaran/update/'.$dpn->id_pendaftaran,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit data-toggle="tooltip" title="Update"i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/datapendaftaran/delete/'.$dpn->id_pendaftaran,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>
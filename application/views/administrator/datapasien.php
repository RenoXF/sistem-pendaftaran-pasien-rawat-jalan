<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-hospital-user"></i> Data Pasien
</div>

<?php echo $this->session->flashdata('pesan') ?>

<?php echo anchor('administrator/datapasien/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Pasien</button>') ?>

    <div class="navbar-form navbar-right">
        <?php echo form_open('administrator/datapasien/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search"><br>
        <button type="submit" class="btn btn-success">Cari</button><br><br>
        <?php echo form_close() ?>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>NO RM</th>
            <th>NO IDENTITAS</th>
            <th>NAMA PASIEN</th>
            <th>JENIS KELAMIN</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php
        foreach($data_pasien as $dp) : ?>

        <tr>
            <td><?php echo $dp->no_rm ?></td>
            <td><?php echo $dp->no_identitas ?></td>
            <td><?php echo $dp->nama_pasien ?></td>
            <td><?php echo $dp->jenis_kelamin ?></td>
            <td width="20px"><?php echo anchor('administrator/datapasien/detail/'.$dp->no_rm,'<div class="btn btn-sm btn-info"><i class="fa fa-eye" data-toggle="tooltip" title="View"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/datapasien/update/'.$dp->no_rm,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit" data-toggle="tooltip" title="Update"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>
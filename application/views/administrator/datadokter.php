<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-user-md"></i> Data Dokter
</div>

<?php echo $this->session->flashdata('pesan') ?>

<?php echo anchor('administrator/datadokter/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Dokter</button>') ?>

<table class="table table-striped table-hover table-bordered">
        <tr>
            <th>ID DOKTER</th>
            <th>NIP DOKTER</th>
            <th>NAMA DOKTER</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php

        foreach($datadokter as $dd) : ?>

        <tr>
            <td><?php echo $dd->id_dokter ?></td>
            <td><?php echo $dd->nip_dokter ?></td>
            <td><?php echo $dd->nama_dokter ?></td>
            <td width="20px"><?php echo anchor('administrator/datadokter/detail/'.$dd->id_dokter,'<div class="btn btn-sm btn-info"><i class="fa fa-eye" data-toggle="tooltip" title="View"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/datadokter/update/'.$dd->id_dokter,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit" data-toggle="tooltip" title="Update"></i></div>') ?></td>
            <td width="20px"><?php echo anchor('administrator/datadokter/delete/'.$dd->id_dokter,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>
        </div>
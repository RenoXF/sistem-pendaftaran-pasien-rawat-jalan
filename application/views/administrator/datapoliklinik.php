<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-clinic-medical"></i> Data Poliklinik
</div>

<?php echo $this->session->flashdata('pesan') ?>

<?php echo anchor('administrator/datapoliklinik/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Poliklinik</button>') ?>

<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>ID POLIKLINIK</th>
        <th>NAMA POLIKLINIK</th>
        <th colspan="2">AKSI</th>
    </tr>

    <?php
    foreach ($data_poliklinik as $dpl) : ?>
    <tr>
        <td><?php echo $dpl->id_poliklinik ?></td>
        <td><?php echo $dpl->nama_poliklinik ?></td>
        <td width="20px"><?php echo anchor('administrator/datapoliklinik/update/'.$dpl->id_poliklinik,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit" data-toggle="tooltip" title="Update"></i></div>') ?></td>
        <td width="20px"><?php echo anchor('administrator/datapoliklinik/delete/'.$dpl->id_poliklinik,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></div>') ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
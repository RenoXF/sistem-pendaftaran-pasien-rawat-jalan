<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-clinic-medical"></i> Form Update Data Poliklinik
</div>

<?php foreach ($data_poliklinik as $dpl) : ?>

    <form method="post" action="<?php echo base_url('administrator/datapoliklinik/update_aksi') ?>">

    <div class="form-group">
        <label>NAMA POLIKLINIK</label>
        <input type="hidden" name="id_poliklinik" value="<?php echo $dpl->id_poliklinik?>">
        <input type="text" name="nama_poliklinik" class="form-control" value="<?php echo $dpl->nama_poliklinik ?>">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button><br><br>
</form>

    <?php endforeach; ?>
</div>
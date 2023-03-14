<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-clinic-medical"></i> Form Input Data Poliklinik
</div>

<form method="post" action="<?php echo base_url('administrator/datapoliklinik/input_aksi')?>">  

<div class="form-group">
        <label>NAMA POLIKLINIK</label>
        <input type="text" name="nama_poliklinik" placeholder="Masukkan Nama Poliklinik" class="form-control">
        <?php echo form_error('nama_poliklinik','<div class="text-danger small" ml-3>') ?>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
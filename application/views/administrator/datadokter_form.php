<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-user-md"></i> Form Input Data Dokter
</div>

<form method="post" action="<?php echo base_url('administrator/datadokter/input_aksi')?>">

<div class="form-group">
    <label>NIP DOKTER</label>
    <input type="text" name="nip_dokter" class="form-control">
    <?php echo form_error('nip_dokter', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>NAMA DOKTER</label>
    <input type="text" name="nama_dokter" class="form-control">
    <?php echo form_error('nama_dokter', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>JENIS KELAMIN</label>
    <select name="jenis_kelamin" class="form-control">
    <option value="">-- PILIH JENIS KELAMIN PASIEN --</option>
        <option>LAKI-LAKI</option>
        <option>PEREMPUAN</option>
    </select>
    <?php echo form_error('jenis_kelamin', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>ALAMAT</label>
    <input type="text" name="alamat" class="form-control">
    <?php echo form_error('alamat', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>NO TELEPON</label>
    <input type="text" name="no_telepon" class="form-control">
    <?php echo form_error('no_telepon', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>DOKTER SPESIALIS</label>
    <input type="text" name="spesialis" class="form-control">
    <?php echo form_error('spesialis', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<button type="submit" class="btn btn-primary">Simpan</button><br><br>

</form>
</div>
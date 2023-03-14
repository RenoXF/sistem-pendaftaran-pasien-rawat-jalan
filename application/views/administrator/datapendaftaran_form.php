<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-hospital-user"></i> Form Input Data Pendaftaran Pasien Rawat Jalan
</div>

<form method="post" action="<?php echo base_url('administrator/datapendaftaran/tambah_datapendaftaran_aksi')?>">

<div class="form-group">
    <label>NO RM</label>
    <input type="text" name="no_rm" id="no_rm" class="form-control">
    <?php echo form_error('no_rm', '<div class="text-danger small ml-3">','</div>') ?>

    <label>NAMA PASIEN</label>
    <input list="data_pasien" type="text" name="nama_pasien" id="nama_pasien" class="form-control">
    <?php echo form_error('nama_pasien', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>TANGGAL PENDAFTARAN</label>
    <input type="date" name="tgl_pendaftaran" class="form-control">
    <?php echo form_error('tgl_pendaftaran', '<div class="text-danger small ml-3">','</div>') ?>
 </div>

<div class="form-group">
    <label>POLI TUJUAN</label>
    <select name="id_poliklinik" class="form-control">
    <option value="">-- PILIH POLI TUJUAN PASIEN --</option>
    <?php foreach ($data_poliklinik as $dpl) : ?>
    <option value="<?php echo $dpl->nama_poliklinik?>"><?php echo $dpl->nama_poliklinik;?></option>
    <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label>DPJP</label>
    <select name="id_dokter" class="form-control">
    <option value="">-- PILIH DPJP --</option>
    <?php foreach ($datadokter as $dd) : ?>
    <option value="<?php echo $dd->nama_dokter?>"><?php echo $dd->nama_dokter;?></option>
    <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label>PETUGAS PENDAFTARAN</label>
    <input type="text" name="petugas" class="form-control">
    <?php echo form_error('petugas', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<button type="submit" class="btn btn-primary">Simpan</button><br><br>

</form>
</div>
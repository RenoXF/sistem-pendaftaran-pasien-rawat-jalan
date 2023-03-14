<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-hospital-user"></i> Form Input Data Pasien
</div>

<form method="post" action="<?php echo base_url('administrator/datapasien/input_aksi')?>">

<div class="form-group">
    <label>NO IDENTITAS</label>
    <input type="text" name="no_identitas" class="form-control">
    <?php echo form_error('no_identitas', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>NAMA PASIEN</label>
    <input type="text" name="nama_pasien" class="form-control">
    <?php echo form_error('nama_pasien', '<div class="text-danger small ml-3">','</div>') ?>
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

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>TANGGAL LAHIR</label>
            <input type="date" name="tgl_lahir" class="form-control">
            <?php echo form_error('tgl_lahir', '<div class="text-danger small ml-3">','</div>') ?>
    </div>
        </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>TEMPAT LAHIR</label>
            <input type="text" name="tpt_lahir" class="form-control">
             <?php echo form_error('tpt_lahir', '<div class="text-danger small ml-3">','</div>') ?>
    </div>
        </div>
</div>

<div class="form-group">
    <label>STATUS PASIEN</label>
    <select name="status_pasien" class="form-control">
    <option value="">-- PILIH STATUS PASIEN --</option>
        <option>MENIKAH</option>
        <option>BELUM MENIKAH</option>
        <option>DUDA</option>
        <option>JANDA</option>
    </select>
    <?php echo form_error('status_pasien', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>AGAMA</label>
    <select name="agama" class="form-control">
    <option value="">-- PILIH AGAMA PASIEN --</option>
        <option>ISLAM</option>
        <option>KRISTEN</option>
        <option>KATOLIK</option>
        <option>HINDU</option>
        <option>BUDHA</option>
        <option>KONGHUCU</option>
    </select>
    <?php echo form_error('agama', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>ALAMAT</label>
    <input type="text" name="alamat" class="form-control">
    <?php echo form_error('alamat', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>PEKERJAAN</label>
    <select name="pekerjaan" class="form-control">
    <option value="">-- PILIH PEKERJAAN PASIEN --</option>
        <option>WIRASWASTA</option>
        <option>PNS</option>
        <option>TNI/POLRI</option>
        <option>PELAJAR/MAHASISWA</option>
        <option>PETANI</option>
        <option>PEDAGANG</option>
        <option>MENGURUS RUMAH TANGGA</option>
        <option>BELUM/TIDAK BEKERJA</option>
    </select>
    <?php echo form_error('pekerjaan', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>KELUARGA</label>
    <input type="text" name="keluarga" class="form-control">
    <?php echo form_error('keluarga', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<div class="form-group">
    <label>NO TELEPON</label>
    <input type="text" name="no_tlp" class="form-control">
    <?php echo form_error('no_tlp', '<div class="text-danger small ml-3">','</div>') ?>
</div>

<button type="submit" class="btn btn-primary">Simpan</button><br><br>

</form>
</div>
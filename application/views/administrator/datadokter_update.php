<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-user-md"></i> Form Update Data Dokter
</div>

<?php foreach ($datadokter as $dd) : ?>

    <form method="post" action="<?php echo base_url('administrator/datadokter/update_aksi')?>">

    <div class="form-group">
        <label>NIP DOKTER</label>
        <input type="hidden" name="id_dokter" value="<?php echo $dd->id_dokter?>">
        <input type="text" name="nip_dokter" class="form-control" value="<?php echo $dd->nip_dokter?>">
    </div>

    <div class="form-group">
        <label>NAMA DOKTER</label>
        <input type="text" name="nama_dokter" class="form-control" value="<?php echo $dd->nama_dokter?>">
    </div>

    <div class="form-group">
        <label>JENIS KELAMIN</label>
        <select name="jenis_kelamin" class="form-control" value="<?php echo $dd->jenis_kelamin?>">
        <option value="">-- PILIH JENIS KELAMIN PASIEN --</option>
            <option>LAKI-LAKI</option>
            <option>PEREMPUAN</option>
        </select>
    </div>

    <div class="form-group">
        <label>ALAMAT</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $dd->alamat?>">
    </div>

    <div class="form-group">
        <label>NO TELEPON</label>
        <input type="text" name="no_telepon" class="form-control" value="<?php echo $dd->no_telepon?>">
    </div>

    <div class="form-group">
        <label>DOKTER SPESIALIS</label>
        <input type="text" name="spesialis" class="form-control" value="<?php echo $dd->spesialis?>">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button><br><br>

</form>
    <?php endforeach; ?>
</div>
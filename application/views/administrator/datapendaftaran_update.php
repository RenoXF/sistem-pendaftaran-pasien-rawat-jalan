<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-hospital-user"></i> Form Update Data Pendaftaran Pasien Rawat Jalan
</div>

<?php foreach ($data_pendaftaran as $dpn) : ?>

    <form method="post" action="<?php echo base_url('administrator/datapendaftaran/update_aksi')?>">

    <div class="form-group">
        <label>NO RM</label>
        <input type="hidden" name="id_pendaftaran" value="<?php echo $dpn->id_pendaftaran?>">
        <input type="text" name="no_rm" class="form-control"value="<?php echo $dpn->no_rm?>">
    </div>

    <div class="form-group">
        <label>NAMA PASIEN</label>
        <input type="text" name="nama_pasien" class="form-control" value="<?php echo $dpn->nama_pasien?>">
    </div>

    <div class="form-group">
        <label>TANGGAL PENDAFTARAN</label>
        <input type="date" name="tgl_pendaftaran" class="form-control" value="<?php echo $dpn->tgl_pendaftaran?>">
    </div>

    <div class="form-group">
        <label>POLI TUJUAN</label>
        <select name="id_poliklinik" class="form-control">
        <option value="<?php echo $dpn->id_poliklinik?>"><?php echo $dpn->id_poliklinik; ?></option>
        <?php foreach ($data_poliklinik as $dpl) : ?>
            <option value="<?php echo $dpl->nama_poliklinik?>"><?php echo $dpl->nama_poliklinik; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>DPJP</label>
        <select name="id_dokter" class="form-control">
        <option value="<?php echo $dpn->id_dokter?>"><?php echo $dpn->id_dokter; ?></option>
        <?php foreach ($datadokter as $dd) : ?>
            <option value="<?php echo $dd->nama_dokter?>"><?php echo $dd->nama_dokter; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>PETUGAS PENDAFTARAN</label>
        <input type="text" name="petugas" class="form-control" value="<?php echo $dpn->petugas?>">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button><br><br>
</form>

    <?php endforeach; ?>
</div>
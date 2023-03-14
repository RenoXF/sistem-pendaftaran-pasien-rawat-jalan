<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-hospital-user"></i> Form Update Data Pasien
</div>

<?php foreach ($data_pasien as $dp) : ?>

    <form method="post" action="<?php echo base_url('administrator/datapasien/update_aksi')?>">

    <div class="form-group">
        <label>NO IDENTITAS</label>
        <input type="hidden" name="no_rm" value="<?php echo $dp->no_rm?>">
        <input type="text" name="no_identitas" class="form-control" value="<?php echo $dp->no_identitas?>">
    </div>

    <div class="form-group">
        <label>NAMA PASIEN</label>
        <input type="text" name="nama_pasien" class="form-control"value="<?php echo $dp->nama_pasien?>">
    </div>

    <div class="form-group">
        <label>JENIS KELAMIN</label>
        <select name="jenis_kelamin" class="form-control" value="<?php echo $dp->jenis_kelamin?>">
        <option value="">-- PILIH JENIS KELAMIN PASIEN --</option>
            <option>LAKI-LAKI</option>
            <option>PEREMPUAN</option>
        </select>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>TANGGAL LAHIR</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $dp->tgl_lahir?>">
        </div>
            </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>TEMPAT LAHIR</label>
                <input type="text" name="tpt_lahir" class="form-control" value="<?php echo $dp->tpt_lahir?>">
        </div>
            </div>
    </div>

    <div class="form-group">
        <label>STATUS PASIEN</label>
        <select name="status_pasien" class="form-control" value="<?php echo $dp->status_pasien?>">
        <option value="">-- PILIH STATUS PASIEN --</option>
            <option>MENIKAH</option>
            <option>BELUM MENIKAH</option>
            <option>DUDA</option>
            <option>JANDA</option>
        </select>
    </div>

    <div class="form-group">
        <label>AGAMA</label>
        <select name="agama" class="form-control" value="<?php echo $dp->agama?>">
        <option value="">-- PILIH AGAMA PASIEN --</option>
            <option>ISLAM</option>
            <option>KRISTEN</option>
            <option>KATOLIK</option>
            <option>HINDU</option>
            <option>BUDHA</option>
            <option>KONGHUCU</option>
        </select>
    </div>

    <div class="form-group">
        <label>ALAMAT</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $dp->alamat?>">
    </div>

    <div class="form-group">
        <label>PEKERJAAN</label>
        <select name="pekerjaan" class="form-control" value="<?php echo $dp->pekerjaan?>">
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
    </div>

    <div class="form-group">
        <label>KELUARGA</label>
        <input type="text" name="keluarga" class="form-control" value="<?php echo $dp->keluarga?>">
    </div>

    <div class="form-group">
        <label>NO TELEPON</label>
        <input type="text" name="no_tlp" class="form-control" value="<?php echo $dp->no_tlp?>">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button><br><br>
</form>

    <?php endforeach; ?>
</div>
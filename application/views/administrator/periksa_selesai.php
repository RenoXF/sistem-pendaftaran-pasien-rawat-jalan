<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-procedures"></i> STATUS PERIKSA
</div>

<?php foreach($data_pendaftaran as $dpn) : ?>
<form method="POST" action="<?php echo base_url('administrator/datapendaftaran/periksa_selesai_aksi')?>">
<input type="hidden" name="id_pendaftaran" value="<?php echo $dpn->id_pendaftaran ?>">

<div class="form-group">
    <label>STATUS PERIKSA</label>
    <select name="status_periksa" class="form-control">
    <option value="<?php echo $dpn->status_periksa ?>"><?php echo $dpn->status_periksa ?></option>
        <option>PROSES</option>
        <option>SELESAI</option>

    </select>
</div>

<button type="submit" class="btn btn-sm btn-success">SIMPAN</button>

</form>

<?php endforeach; ?>
</div>
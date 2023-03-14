<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-eye"></i> Detail Data Pendaftaran Pasien Rawat Jalan
</div>

<table class="table table-hover table-bordered table-striped">
    
<?php foreach($detail as $dt) : ?>

    <tr>
        <td>ID PENDAFTARAN</td>
        <td><?php echo $dt->id_pendaftaran; ?> </td>
    </tr>

    <tr>
        <td>NO RM</td>
        <td><?php echo $dt->no_rm; ?> </td>
    </tr>

    <tr>
        <td>NAMA PASIEN</td>
        <td><?php echo $dt->nama_pasien; ?> </td>
    </tr>

    <tr>
        <td>TANGGAL PENDAFTARAN</td>
        <td><?php echo $dt->tgl_pendaftaran; ?> </td>
    </tr>

    <tr>
        <td>POLI TUJUAN</td>
        <td><?php echo $dt->id_poliklinik; ?> </td>
    </tr>

    <tr>
        <td>DPJP</td>
        <td><?php echo $dt->id_dokter; ?> </td>
    </tr>

    <tr>
        <td>NOMOR ANTRIAN</td>
        <td><?php echo $dt->no_antrian; ?> </td>
    </tr>

    <tr>
        <td>PETUGAS PENDAFTARAN</td>
        <td><?php echo $dt->petugas; ?> </td>
    </tr>

    <tr>
        <td>STATUS PERIKSA</td>
        <td><?php echo $dt->status_periksa; ?> </td>
    </tr>

<?php endforeach; ?>
</table>

<?php echo anchor('administrator/datapendaftaran','<div class="btn btn-sm btn-primary">KEMBALI</div>')?><br><br><br><br>

</div>
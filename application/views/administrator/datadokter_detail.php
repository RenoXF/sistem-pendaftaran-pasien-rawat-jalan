<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-eye"></i> Detail Data Dokter
</div>

<table class="table table-hover table-bordered table-striped">
    
<?php foreach($detail as $dt) : ?>

<tr>
    <td>ID DOKTER</td>
    <td><?php echo $dt->id_dokter; ?> </td>
</tr>

<tr>
    <td>NIP DOKTER</td>
    <td><?php echo $dt->nip_dokter; ?> </td>
</tr>

<tr>
    <td>NAMA DOKTER</td>
    <td><?php echo $dt->nama_dokter; ?> </td>
</tr>

<tr>
    <td>JENIS KELAMIN</td>
    <td><?php echo $dt->jenis_kelamin; ?> </td>
</tr>

<tr>
    <td>ALAMAT</td>
    <td><?php echo $dt->alamat; ?> </td>
</tr>

<tr>
    <td>NO TELEPON</td>
    <td><?php echo $dt->no_telepon; ?> </td>
</tr>

<tr>
    <td>DOKTER SPESIALIS</td>
    <td><?php echo $dt->spesialis; ?> </td>
</tr>

<?php endforeach; ?>
</table>

<?php echo anchor('administrator/datadokter','<div class="btn btn-sm btn-primary">KEMBALI</div>')?><br><br><br><br>

</div>
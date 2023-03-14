<div class="container-fluid">

<div class="alert alert-success" role="alert">
<i class="fas fa-eye"></i> Detail Data Pasien
</div>

<table class="table table-hover table-bordered table-striped">
    
<?php foreach($detail as $dt) : ?>

<tr>
    <td>NO RM</td>
    <td><?php echo $dt->no_rm; ?> </td>
</tr>

<tr>
    <td>NO IDENTITAS</td>
    <td><?php echo $dt->no_identitas; ?> </td>
</tr>

<tr>
    <td>NAMA PASIEN</td>
    <td><?php echo $dt->nama_pasien; ?> </td>
</tr>

<tr>
    <td>JENIS KELAMIN</td>
    <td><?php echo $dt->jenis_kelamin; ?> </td>
</tr>

<tr>
    <td>TANGGAL LAHIR</td>
    <td><?php echo $dt->tgl_lahir; ?> </td>
</tr>

<tr>
    <td>TEMPAT LAHIR</td>
    <td><?php echo $dt->tpt_lahir; ?> </td>
</tr>

<tr>
    <td>STATUS PASIEN</td>
    <td><?php echo $dt->status_pasien; ?> </td>
</tr>

<tr>
    <td>AGAMA</td>
    <td><?php echo $dt->agama; ?> </td>
</tr>

<tr>
    <td>ALAMAT</td>
    <td><?php echo $dt->alamat; ?> </td>
</tr>

<tr>
    <td>PEKERJAAN</td>
    <td><?php echo $dt->pekerjaan; ?> </td>
</tr>

<tr>
    <td>KELUARGA</td>
    <td><?php echo $dt->keluarga; ?> </td>
</tr>

<tr>
    <td>NO TELEPON</td>
    <td><?php echo $dt->no_tlp; ?> </td>
</tr>

<?php endforeach; ?>
</table>

<?php echo anchor('administrator/datapasien','<div class="btn btn-sm btn-primary">KEMBALI</div>')?><br><br><br><br>

</div>
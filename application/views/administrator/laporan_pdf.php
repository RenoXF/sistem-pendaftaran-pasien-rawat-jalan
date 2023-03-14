<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>style.css" />
        <title>Laporan Pasien</title>
        <style type="text/css">
        body{
            font-family: Arial;
            color: black;
        }
        .table{
            width:100%;
            border-spacing: 0
        }
        .table tr:first-child th,
        .table th:first-child td{
            border-top: 1px solid #000
        }
        .table tr th:first-child,
        .table tr td:first-child{
            border-left: 1px solid #000
        }
        .table tr th,
        .table tr td{
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
            padding: 4px;
            vertical-align: top
        }
        .text-center{
            text-align: center;
        }
        .line-title{
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
        </style>
    </head>
<body>
<img href= "data:images/data:image/png;base64,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" style="width= 60px; height: auto; position: absolute;">
<table style="width: 100%;">
    <tr>
        <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
        KLINIK UDB<br>
        SURAKARTA
        </span>
        </td>
    </tr>
</table>

<hr class="line-title">
<p align="center">
LAPORAN KUNJUNGAN PASIEN
</p>

<table class="table table-bordered">

    <tr>
        <th>NO</th>
        <th>NO RM</th>
        <th>NAMA PASIEN</th>
        <th>TANGGAL PENDAFTARAN</th>
        <th>POLI</th>
        <th>DPJP</th>
        <th>NOMOR ANTRIAN</th>
        <th>PETUGAS</th>
    </tr>
        
    <?php
    $no= 1;
    foreach ($data_pendaftaran as $dpn): ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $dpn->no_rm ?></td>
        <td><?php echo $dpn->nama_pasien ?></td>
        <td><?php echo $dpn->tgl_pendaftaran ?></td>
        <td><?php echo $dpn->id_poliklinik ?></td>
        <td><?php echo $dpn->id_dokter ?></td>
        <td><?php echo $dpn->no_antrian ?></td>
        <td><?php echo $dpn->petugas ?></td>
    </tr>

    <?php endforeach; ?>

</table>
   


<table width="100%">
<tr>
    <td></td>
    <td width="200px">
        <p>Surakarta, .................... <br> Pimpinan Klinik</p>
        <br>
        <br>
        <p>__________________________</p>
    </td>
</tr>
</table>

</body>
</html>

<script type="text/javascript">
window.print()
</script>
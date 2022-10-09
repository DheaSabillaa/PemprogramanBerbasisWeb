<?php
$nisn=$_POST['nisn'];
$asalsekolah=$_POST['asalsekolah'];
$tahunlulus=$_POST['tahunlulus'];
$nama=$_POST['nama'];
$nik=$_POST['nik'];
$tempatlahir=$_POST['tempatlahir'];
$tanggal=$_POST['tanggal'];
$agama=$_POST['agama'];
$jeniskelamin=$_POST['jeniskelamin'];
$alamat=$_POST['alamat'];
$emailaktif=$_POST['emailaktif'];
$nomerhp=$_POST['nomerhp'];
$nomerkartukeluarga=$_POST['nomerkartukeluarga'];
$namaayahkandung=$_POST['namaayahkandung'];
$pekerjaan=$_POST['pekerjaan'];
$namaibukandung=$_POST['namaibukandung'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
    body {
      margin: 0;
    }
  </style>
  <body>
    <div
      style="
        background-color: #5a9cfc;
        padding: 20px;
        text-align: center;
        color: White;
      "
    >
      <h1>Formulir Mahasiswa</h1>
    </div>
    <div style="margin-top:50px; margin-bottom:50px">
      <table
        border="1"
        width="50%"
        style="margin-left: 380px; margin-right: 380px"
      >
        <tr style="background-color: #5a9cfc; color: white; padding: 30px">
          <th>Nomer</th>
          <th>INFO PENDAFTARAN</th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">1</th>
          <th>NISN<span style="margin-left:150px; font-weigth 500;">:</span> <?php echo "".$nisn?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">2</th>
          <th>Asal Sekolah<span style="margin-left:100px">:</span> <?php echo "".$asalsekolah?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">3</th>
          <th>Tahun Lulus<span style="margin-left:102px">:</span> <?php echo "".$tahunlulus?></th>
        </tr>
        <tr style="background-color: #5a9cfc; color:white; text-align: center">
          <td>Nomer</td>
          <td>DATA CALON MAHASISWA</td>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">1</th>
          <th>Nama<span style="margin-left:148px">:</span> <?php echo "".$nama?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">2</th>
          <th>NIK<span style="margin-left:159px">:</span> <?php echo "".$nik?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">3</th>
          <th>Tempat Lahir<span style="margin-left:94px">:</span> <?php echo "".$tempatlahir?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">4</th>
          <th>Tanggal<span style="margin-left:134px">:</span> <?php echo "".$tanggal?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">5</th>
          <th>Agama<span style="margin-left:140px">:</span> <?php echo "".$agama?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">6</th>
          <th>Jenis Kelamin<span style="margin-left:91px">:</span> <?php echo "".$jeniskelamin?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">7</th>
          <th>Alamat<span style="margin-left:138px">:</span> <?php echo "".$alamat?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">8</th>
          <th>Email Aktif<span style="margin-left:108px">:</span> <?php echo "".$emailaktif?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">9</th>
          <th>Nomer HP<span style="margin-left:115px">:</span> <?php echo "".$nomerhp?></th>
        </tr>
        <tr style="background-color: #5a9cfc; color:white; text-align: center">
          <td>Nomer</td>
          <td>DATA ORANG TUA</td>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">1</th>
          <th>Nomer Kartu Keluarga<span style="margin-left:28px">:</span> <?php echo "".$nomerkartukeluarga?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">2</th>
          <th>Nama Ayah Kandung<span style="margin-left:41px">:</span> <?php echo "".$namaayahkandung?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">3</th>
          <th>Agama<span style="margin-left:139px">:</span> <?php echo "".$agama?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">4</th>
          <th>Pekerjaan<span style="margin-left:117px">:</span> <?php echo "".$pekerjaan?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">5</th>
          <th>Nama Ibu Kandung<span style="margin-left:50px">:</span> <?php echo "".$namaibukandung?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">6</th>
          <th>Agama<span style="margin-left:138px">:</span> <?php echo "".$agama?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">7</th>
          <th>Pekerjaan<span style="margin-left:116px">:</span> <?php echo "".$pekerjaan?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">8</th>
          <th>Nomer HP<span style="margin-left:113px">:</span> <?php echo "".$nomerhp?></th>
        </tr>
        <tr
          style="
            padding: 30px;
            text-align: left;
          "
        >
          <th style="text-align: center">9</th>
          <th>Alamat<span style="margin-left:135px">:</span> <?php echo "".$alamat?></th>
        </tr>
      </table>
    </div>
    <div style="   
        background-color: #5a9cfc;
        padding: 20px;">    
    </div>
  </body>
</html>

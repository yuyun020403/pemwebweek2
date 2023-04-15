<?php

if (!isset($_POST['submit'])) {
    header("location: bmi.php");
    exit;
}


    // inputan user
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tb = $_POST['tb'] /100;
    $bb = $_POST['bb'];


    // menentukan bmi
    $bmi_anda = $bb / ($tb * $tb);


    // mengambil dan menjalankan skrip sekaligus
    require_once 'ket.php';
    $bmi = $bmi_anda;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Berat Badan</th>
      <th scope="col">BMI Anda</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <td><?= $nama ?></td>
    <td><?= $jk ?></td>
    <td><?= $tb ?></td>
    <td><?= $bb ?></td>
    <td><?= number_format($bmi_anda) ?></td>
    <td><?= badan($bmi) ?></td>
  </tbody>
</table>
</body>
</html>
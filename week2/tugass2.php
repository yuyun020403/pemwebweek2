<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12">
                <!-- ini form -->
                <form method="post" action= "" >
                <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="text1" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="ddp">Dasar-dasar pemrograman</option>
        <option value="pemweb">Pemweb</option>
        <option value="basisdata">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="text" name="uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text2" name="uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="text3" name="tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-dark">Submit</button>
    </div>
  </div>
</form>
    <hr>

    <?php if( isset($_POST['submit'])) ?>

           Nama Mahasiswa : <?= $_POST['nama']; ?>
           <br>
           Mata Kuliah : <?= $_POST['matkul']; ?>
           <br>
           Nilai UTS : <?= $_POST['uts']; ?>
           <br>
           Nilai UAS : <?= $_POST['uas']; ?>
           <br>
           Nilai Tugas : <?= $_POST['tugas']; ?>
           <br>

<?php

    $matkul = $_POST['uts'] + $_POST['uas'] + $_POST['tugas'];
    $rata_rata = $matkul /3;
      if ($rata_rata > 90) {
         $grade = "A";
      } elseif($rata_rata > 85){
         $grade = "B";
      } elseif($rata_rata > 69){
         $grade = "C";
      } elseif($rata_rata > 55){
         $grade = "D";
      } elseif($rata_rata > 35){
         $grade = "E";
      } elseif($rata_rata > 100){
         $grade = "I";
      } else{
         $grade = "I";
      }

      echo "Rata-rata nilai anda: $rata_rata<br>";
      echo "Grade: $grade";
      
?>

<?php 
    $grade;
    switch ($grade) {
	case 'A':
		echo "Sangat Memuaskan";
		break;
	case 'B':
		echo "Memuaskan";
		break;
	case 'C':
		echo "Cukup";
		break;
	case 'D':
		echo "Kurang";
		break;
	case 'E':
		echo "Sangat Kurang";
		break;
	default:
		echo "Tidak ada";
		break;
}
?>


<br>
<?php
     $matkul = $_POST['matkul'];
     if($rata_rata >75){
        echo "LULUS";
     }else{
        echo "TIDAK LULUS";
     }

     ?>
</body>
</html>
<?php

  $nama  = $_POST['nama'];
  $matkul = $_POST['matkul'];
  $uts = $_POST['uts'];
  $uas = $_POST['uas'];
  $tugas = $_POST['tugas'];

  if(( $uts + $uas + $tugas)/3 >=80){
    $predikat='MANTAP';
  }

  echo 'Nama mahasiswa :' . $nama;
  echo '<br/> Mata Kuliah :' . $matkul;
  echo '<br> Nilai UTS :' . $uts;
  echo '<br/> Nilai UAS :' . $uas;
  echo '<br/> Nilai Tugas :' . $tugas;

  echo 'predikat Anda :' . $predikat
?>
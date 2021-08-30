<?php

// menangkap data nama dengan method get

$nama = $_POST['nama'];

// menangkap data usia dengan method get

$usia = $_POST['usia'];

 $hobi = $_POST['hobi'];

 $agama =$_POST['agama'];

$asal_sekolah =$_POST['asal_sekolah'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$alamat =$_POST['alamat'];
$tempat_lahir =$_POST['tempat_lahir'];
$tanggal_lahir =$_POST['tanggal_lahir'];
$cita_cita =$_POST['cita_cita'];

// menampilkan data nama

echo "Nama kalian adalah " . $nama;

echo "<br/>";

// menampilkan data usia

echo "Usia kalian adalah " . $usia;
echo "<br/>";
echo "hobi kalian adalah " . $hobi;
echo "<br/>";
echo "agama kalian adalah " . $agama;
echo "<br/>";

echo "asal sekolah kalian adalah " . $asal_sekolah;
echo "<br/>";

echo "jenis kelamin kalian adalah " . $jenis_kelamin;
echo "<br/>";

echo "alamat kalian adalah " . $alamat;
echo "<br/>";

echo "tempat lahir kalian adalah " . $tempat_lahir;
echo "<br/>";

echo "tanggal lahir kalian adalah " . $tanggal_lahir;
echo "<br/>";

echo "cita cita kalian adalah " . $cita_cita;


?>
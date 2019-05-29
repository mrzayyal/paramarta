<?php

if (isset($_POST['sekolahAsal']) && empty($_POST['sekolahAsal']) OR isset($_POST['nisn']) && empty($_POST['nisn']) OR isset($_POST['ijazah']) && empty($_POST['ijazah']) OR isset($_POST['tglIjazah']) && empty($_POST['tglIjazah']) OR isset($_POST['skhun']) && empty($_POST['skhun']) OR empty($_POST['tglSkhun']) && isset($_POST['tglSkhun']) OR isset($_POST['noUjian']) && empty($_POST['noUjian'])){
	echo "<script> location.replace('?psbad=alamat&error=1'); </script>";
}else{

$sekolah=$_POST['sekolahAsal'];
$nisn=$_POST['nisn'];
$ijazah=$_POST['ijazah'];
$tglijazah=$_POST['tglIjazah'];
$skhun=$_POST['skhun'];
$tglskhun=$_POST['tglSkhun'];
$noujian=$_POST['noUjian'];


    $querySimpan=mysql_query("INSERT INTO t_asal (sekolah_asal,nisn,no_ijazah,tgl_ijazah,no_skhun,tgl_skhun,no_ujian) VALUES (
    	'". mysql_escape_string($sekolah) ."',
    	'". mysql_escape_string($nisn) ."',
    	'". mysql_escape_string($ijazah) ."',
    	'". mysql_escape_string($tglijazah) ."',
    	'". mysql_escape_string($skhun) ."',
    	'". mysql_escape_string($tglskhun) ."',
    	'". mysql_escape_string($noujian) ."')");   
	if($querySimpan){
		echo "<script> location.replace('?psbad=asalsekolah&error=2'); </script>";	
	}else{
		echo "gagal";
	}

}
?>
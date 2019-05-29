<?php

if (isset($_POST['NIK']) && empty($_POST['NIK']) OR isset($_POST['alamat']) && empty($_POST['alamat']) OR isset($_POST['provinsi']) && empty($_POST['provinsi']) OR isset($_POST['kota']) && empty($_POST['kota']) OR isset($_POST['kecamatan']) && empty($_POST['kecamatan']) OR empty($_POST['kelurahan']) && isset($_POST['kelurahan']) OR isset($_POST['kodepos']) && empty($_POST['kodepos']) OR isset($_POST['rt']) && empty($_POST['rt']) OR isset($_POST['rw']) && empty($_POST['rw']) OR isset($_POST['alat']) && empty($_POST['alat']) OR isset($_POST['tinggal']) && empty($_POST['tinggal'])){
	echo "<script> location.replace('?psbad=alamat&error=2'); </script>";
}else{

$nik=$_POST['NIK'];
$alamat=$_POST['alamat'];
$provinsi=$_POST['provinsi'];
$kota=$_POST['kota'];
$kecamatan=$_POST['kecamatan'];
$kelurahan=$_POST['kelurahan'];
$kodepos=$_POST['kodepos'];
$rtrw=$_POST['rt'].$_POST['rw'];
$alat = (count($_POST['alat']) > 0) ? implode(',', $_POST['alat']) : ""; 
$jenis=$_POST['tinggal'];

    $querySimpan=mysql_query("INSERT INTO t_alamat (nik,alamat,kelurahan,kecamatan,kabupaten,provinsi,rtrw,kodepos,alat,jenis) VALUES (
    	'". mysql_escape_string($nik) ."',
    	'". mysql_escape_string($alamat) ."',
    	'". mysql_escape_string($provinsi) ."',
    	'". mysql_escape_string($kota) ."',
    	'". mysql_escape_string($kecamatan) ."',
    	'". mysql_escape_string($kelurahan) ."',
    	'". mysql_escape_string($rtrw) ."',
    	'". mysql_escape_string($kodepos) ."',
    	'". mysql_escape_string($alat) ."',
    	'". mysql_escape_string($jenis) ."')");   
	if($querySimpan){
		echo "<script> location.replace('?psbad=pribadi&error=3'); </script>";	
	}else{
		echo "gagal";
	}

}
?>
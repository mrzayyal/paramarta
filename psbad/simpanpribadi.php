<?php

$id_program=$_POST['idProgram'];
$nama=$_POST['namaMurid'];
$jekel=$_POST['jekel'];
$tlhr=$_POST['tempatLahir'];
$tgllhr=$_POST['tglLahir'];
$agama=$_POST['agama'];
$kebutuhan=$_POST['kebutuhan'];
$email=$_POST['email'];
$nohp=$_POST['noHP'];
$notlp=$_POST['rumahTelp'];
$nokps=$_POST['noKPS'];
$tinggi=$_POST['noTinggi'];
$berat=$_POST['noBerat'];
$jarak=$_POST['jarakSekolah'];
$waktu=$_POST['waktuSekolah'];
$saudara=$_POST['saudara'];
$username=$_SESSION['username'];

$tgllhr1=new DateTime($tgllhr);
$tgl_sekarang=new datetime();
$val_tgl=$tgl_sekarang->diff($tgllhr1)->format("%y");

if ($val_tgl<=13){
	echo "<script> location.replace('?psbad=pribadi&error=1'); </script>";
}else{
if (isset($nama) && empty($nama) OR isset($jekel) && empty($jekel) OR isset($tlhr) && empty($tlhr) OR isset($agama) && empty($agama) OR isset($kebutuhan) && empty($kebutuhan) OR empty($email) && isset($email) AND isset($nohp) && empty($nohp) OR isset($notlp) && empty($notlp) OR isset($nokps) && empty($nokps) OR isset($tinggi) && empty($tinggi) OR isset($berat) && empty($berat) OR isset($jarak) && empty($jarak) OR isset($waktu) && empty($waktu) OR isset($saudara) && empty($saudara)){
	echo "<script> location.replace('?psbad=pribadi&error=2'); </script>";
}else{
    $querySimpan=mysql_query("INSERT INTO t_murid (nm_murid,jekel,tlhr,tgllhr,agama,kebutuhan,email,username,nohp,telp,nokps,tinggi,berat,jarak,waktu,saudara,id_program) VALUES (
    	'". mysql_escape_string($nama) ."',
    	'". mysql_escape_string($jekel) ."',
    	'". mysql_escape_string($tlhr) ."',
    	'". mysql_escape_string($tgllhr) ."',
    	'". mysql_escape_string($agama) ."',
    	'". mysql_escape_string($kebutuhan) ."',
    	'". mysql_escape_string($email) ."',
    	'". mysql_escape_string($username) ."',
    	'". mysql_escape_string($nohp) ."',
    	'". mysql_escape_string($notlp) ."',
    	'". mysql_escape_string($nokps) ."',
    	'". mysql_escape_string($tinggi) ."',
    	'". mysql_escape_string($berat) ."',
    	'". mysql_escape_string($jarak) ."',
    	'". mysql_escape_string($waktu) ."',
    	'". mysql_escape_string($saudara) ."',
    	'". mysql_escape_string($id_program) ."')");   
	if($querySimpan){
		echo "<script> location.replace('?psbad=pribadi&error=3'); </script>";	
	}else{
		echo "gagal";
	}
}
}
?>
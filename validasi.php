<?php
require 'koneksi.php';
	$hash = md5(rand(0,1000));
	if($_POST['password1'] != $_POST['password2']){
		echo"<script> location.replace('paramarta.php?p=register&error=1'); </script>";	
	}
	
    if( isset($_POST['username']) && !empty($_POST['username']) AND 
    	isset($_POST['email']) && !empty($_POST['email']) AND 
    	isset($_POST['password2']) && !empty($_POST['password2'])){
    	
    	$username = mysql_escape_string($_POST['username']); 
    	$email = mysql_escape_string($_POST['email']); 
    	$passwd = mysql_escape_string($_POST['password2']); 
    	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
    	echo"<script> location.replace('paramarta.php?p=register&error=2'); </script>";	
		}else{
			mysql_query("INSERT INTO t_daftar (username, password, email, hash) VALUES(
			'". mysql_escape_string($username) ."', 
			'". mysql_escape_string(md5($passwd)) ."', 
			'". mysql_escape_string($email) ."', 
			'". mysql_escape_string($hash) ."') ") or die(mysql_error());
			$link="localhost/verify.php?email=$email&hash=$hash";
			$linkmd5=md5($link);
//-------------buat kirim email -------------------//
$to      = $email; 
$subject = 'Verifikasi Pendaftaran SMK Paramarta';
$message = '
 
Terima Kasih Telah Mendaftar Di Sekolah SMK Paramarta Tangerang!
Akun untuk masuk ke ruang pendaftaran berhasil dibuat, silahkan login untuk dapat masuk ke ruang pendaftaran dan gunakan akun dibawah ini :
 
------------------------
Username: '.$username.'
Password: '.$passwd.'
------------------------
 
Silahkan Klik Link Dibawah Ini Untuk Mengaktifkan Akun:
http://www.localhost.com/verify.php?email='.md5($email).'&hash='.$hash.'
'; // Our message above including the link
                     
$headers = 'From:achmad.maezar@gmail.com' . 
"\r\n"; // Set from headers
@mail($to, $subject, $message, $headers); // Send our email
    	echo"<script> location.replace('paramarta.php?p=register&error=3'); </script>";
		}
    }else{
    	echo"<script> location.replace('paramarta.php?p=register&error=4'); </script>";	
    }
	
?>   
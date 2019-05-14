<?php
include 'koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);

if( isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['password']) && !empty($_POST['password'])){

	$login = mysql_query("select * from t_daftar where username='$username' and password='$password' and active='1' ");
	$cek = mysql_num_rows($login);
	$data1=mysql_fetch_array($login) ;
	if($cek > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $data1['email'];
		$_SESSION['status'] = "login";
		header("location:psbad/index.php");
	}else{
		echo"<script> location.replace('paramarta.php?p=login&error=1'); </script>";		
	}
}else{
	echo"<script> location.replace('paramarta.php?p=login&error=2'); </script>";		
}

?>
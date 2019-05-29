<?php
include "../koneksi.php";

$kec_nm=$_POST['kec_nm'];

$sql_kel=mysql_query("SELECT * FROM t_provinsi WHERE kec='$kec_nm'");

echo"<option>Pilih Kelurahan</option>";
while($kel=mysql_fetch_array($sql_kel)){
	echo"<option value='$kel[kel]'>$kel[kel]</option>";
}
?>
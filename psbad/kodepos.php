<?php
include "../koneksi.php";

$kel_nm=$_POST['kel_nm'];

$sql_kdp=mysql_query("SELECT * FROM t_provinsi WHERE kel='$kel_nm'");

echo"<option>Pilih Kode Pos</option>";
while($kdp=mysql_fetch_array($sql_kdp)){
	echo"<option value='$kdp[kodepos]'>$kdp[kodepos]</option>";
}
?>
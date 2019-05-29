<?php
include "../koneksi.php";

$prov_nm=$_POST['prov_nm'];

$sql_kota=mysql_query("SELECT * FROM t_provinsi WHERE provinsi='$prov_nm' GROUP BY kab_kota");

echo"<option>Pilih Kota</option>";
while($kota=mysql_fetch_array($sql_kota)){
	echo"<option value='$kota[kab_kota]'>$kota[kab_kota]</option>";
}
?>
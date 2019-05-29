<?php
include "../koneksi.php";

$kota_nm=$_POST['kota_nm'];

$sql_kec=mysql_query("SELECT * FROM t_provinsi WHERE kab_kota='$kota_nm' GROUP BY kec");

echo"<option>Pilih Kecamatan</option>";
while($kec=mysql_fetch_array($sql_kec)){
	echo"<option value='$kec[kec]'>$kec[kec]</option>";
}
?>
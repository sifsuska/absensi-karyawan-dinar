<?php 
$koneksi = mysqli_connect("127.0.0.1", "root", "", "karyawansi");

if (mysqli_connect_errno()) {
	echo "koneksi gagal " . mysql_connect_error();
}
 ?>
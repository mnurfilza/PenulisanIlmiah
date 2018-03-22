<?php	
$mysqli = new mysqli ('localhost','root','','bernaung');
if ($mysqli->connect_errno) {
	echo "Gagal Koneksi (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
<?php

session_start();

if (empty($_SESSION['id']) AND empty($_SESSION['password']))
{
  echo "Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=login.php><b>LOGIN</b></a></center>";
}
else
{
?>
<!--awal else

<?php

include "../koneksi/koneksi.php";


$lokasi_file=$_FILES['pic'] ['tmp_name'];
$nama_file=$_FILES['pic'] ['name'];

//apabila gambar tidak diganti
/*
if (!empty($location_file))

{
mysql_query("UPDATE user SET
	
	email='$_POST[email]',
	
	password='$_POST[password]',
	
	pic='$name_file'
	
	where email='$_POST[id]'");
		
	
}
// apabila gambar di ganti
else
{
	
*/

	move_uploaded_file($lokasi_file,"data_pic/$nama_file");
	
	
	mysql_query("UPDATE user SET
	
	nama='$_POST[nama]',
		
	id_user='$_POST[id_user]',
	
	
	
	where email='$_POST[id]'");
	header('location:list_build.php');
		
}


?>

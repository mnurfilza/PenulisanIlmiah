
<?php
session_start();

if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']))
{
  echo "Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=login_admin.php><b>LOGIN</b></a></center>";
}
?>

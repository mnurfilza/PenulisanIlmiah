<?php
include"config.php";
if (isset($_POST['id']) && isset($_POST['password'])) {
	$id = $_POST['id'];
	$password = $_POST['password'];
	$hasil = $mysqli->query("select * from admin where id ='$id' and password = '$password'");
	$row = $hasil->fetch_assoc();
	$user = $row['id'];
	$pass = $row['password'];

	if ($id==$user && $password==$pass) {
		session_start();
		$_SESSION['id']=$user;
		$_SESSION['password'] = $pass;
?><script>window.location.href ='admin.php'</script>
		<?php
		}else{
			echo"<script> alert ('password salah , silahkan daftar')</script>";
		echo"<a href=index.php>Anda tidak punya akun</a>";

	}
}
?>
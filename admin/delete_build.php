<?php
include"config.php";

$seleksi = mysqli_query($mysqli,"SELECT * FROM build WHERE nama='$_GET[id]'");

$r = mysqli_fetch_array($seleksi);

if($r['pic']=="")
{
	
	mysqli_query($mysqli,"DELETE FROM build WHERE nama='$_GET[id]'");
	
	header('location:list_build.php');
}
else {
	unlink("data_pic/$r[pic]");
	mysqli_query($mysqli,"DELETE FROM build WHERE nama='$_GET[id]'");
	
	header("location:list_build.php");
}
?>
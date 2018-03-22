<?php
include"config.php";

$seleksi = mysqli_query($mysqli,"SELECT * FROM renovasi WHERE nama='$_GET[id]'");

$r = mysqli_fetch_array($seleksi);

if($r['pic']=="")
{
	
	mysqli_query($mysqli,"DELETE FROM renovasi WHERE nama='$_GET[id]'");
	
	header('location:list_renov.php');
}
else {
	unlink("data_pic/$r[pic]");
	mysqli_query($mysqli,"DELETE FROM renovasi WHERE nama='$_GET[id]'");
	
	header("location:list_renov.php");
}
?>
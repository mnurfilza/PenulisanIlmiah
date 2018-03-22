<?php

session_start();

if (empty($_SESSION['id']) AND empty($_SESSION['password']))
{
  echo "Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href='style.css'>
<head lang = 'en'>
	<meta charset="utf-8">
	<meta name = 'viewport' content="width-device-width, initial-scale=1.0">	
	<script type="text/javascript" src = "jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src ="mainmenu.js"></script>
	<script type="text/javascript" src="loading.js"></script>
	<script type="text/javascript" src="sticky.js"></script>
	<script type="text/javascript" src="js/scrip.js"></script>
	<title>Bernaung : tabel renovaso </title>

</head>
<body>
<div id ='header'>
	<div class="center">
	<h2>Bernaung</h2>
		<div class = "navigation">
			<ul>
				<li><a href="admin.php">Home</a></li>
				<li><a href="list_build.php">Build</a></li>
				<li><a href="list_renov.php">Renovasi</a></li>
				<li><a href="uploading.php">Uploading</a>
				<li><a href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php

echo"
	<center>
		<h2>List User</h2>
		 </center>
		 <br><br>
		 
<table width=650 align='center' border=1 cellpading=0 cellspacing=0>
	<tr>
		<th align=center> Nomor</th>


		<th>Nama Lengkap</th>
		<th>Nomor Identitas</th>
		<th>Nomor Telepon </th>
		<th>Email </th>
		<th>Alamat </th>
		<th>Keterangan</th>
		<th>Gambar </th>
		<th>Tanggal</th>
		<th>Navigation</th>
	</tr>";
		
		include "config.php";
		
		$result=$mysqli->query("select * from renovasi ORDER by email");
		
		$no=1;
		
		while($r=$result->fetch_array(MYSQLI_ASSOC))
		{
			echo "
						<tr>
								<td align=center>$no</td>
								<td>$r[nama]</td>
								<td>$r[id_user]</td>
								<td>$r[notlp]</td>
								<td>$r[email]</td>
								<td>$r[alamat]</td>
								<td>$r[keterangan]</td>
								<td> <img src=data_pic/$r[pic] width=60 height=60 
								</td>
								<td>$r[tannggal]</td>

								 
								 <td align=center>
									<a href=delete_renov.php?id=$r[nama] >
									<input type=button value=delete>
									</a>
								 </td>
								</tr>";
								$no++;
		}

?>
</body>
</html>
<?php
}
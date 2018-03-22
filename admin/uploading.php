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
<link rel="stylesheet" type="text/css" href='uploading.css'>
<head lang = 'en'>
	<meta charset="utf-8">
	<meta name = 'viewport' content="width-device-width, initial-scale=1.0">	
	<script type="text/javascript" src = "jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src ="mainmenu.js"></script>
	<script type="text/javascript" src="loading.js"></script>
	<script type="text/javascript" src="sticky.js"></script>
	<script type="text/javascript" src="js/scrip.js"></script>
	<title>Bernaung : Uploading </title>

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
<h1 align="center">Uploading Form</h1>
<div id="form">
    <form method="post" action="inputupload.php" enctype="multipart/form-data" >
        <table cellpadding="0" cellspacing="0" border="0" align="center">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama" required="Isi nama Anda dengan benar"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea type="text" name="alamat" placeholder="Masukan Alamat Anda" required="Isi alamat anda"></textarea></td>
            </tr>
            <tr>
                <td>Upload Foto Rumah</td>
                <td><input type="file" name="pic"><br>
                Gambar Tidak Boleh Lebih Dari 1 MegaByte</td>
                
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="Submit"  >
                    <input type="reset" value="Cancel" ></td>
            </tr>
        </table>
        </form>

        <a href=""></a>

    </div> 

</body>
</html>
<?php
}
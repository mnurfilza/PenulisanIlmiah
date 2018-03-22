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
	<title>Bernaung : Admmin </title>

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

<div id = "banner">
	<div class = "center">
		<h1>Welcome to Admin Side</h1>
	</div>
</div>

</body>
</html>
<?php
}
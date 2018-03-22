<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head lang = 'en'>
	<meta charset="utf-8">
	<meta name = 'viewport' content="width-device-width, initial-scale=1.0">	
	<script type="text/javascript" src = "jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src ="mainmenu.js"></script>
	<script type="text/javascript" src="loading.js"></script>
	<script type="text/javascript" src="sticky.js"></script>
	<script type="text/javascript" src="js/scrip.js"></script>

	<title>Bernaung : Portofolio</title>

</head>
<body>
<div id ='header'>
	<div class="center">
	<h2>Bernaung</h2>
		<div class = "navigation">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="portofolio.html">Portofolio</a></li>
				<li><a href="index.html #kontak">Contact</a></li>
				<li><a href="index.html #ourservices" class ="menu" >Order</a>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php 
include "admin/config.php";
		
		$result=$mysqli->query("select * from portofolio ORDER by nama");
		
		$no=1;
		
		while($r=$result->fetch_array(MYSQLI_ASSOC))
		{
			echo "
						<tr align='center'>
								<td> <img src=admin/data_foto/$r[pic] width=200 height=200 
								</td>

								 
								 </tr>";
								$no++;
		}

		?>
</body>
</html>
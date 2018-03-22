<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="kontak.css">
<head lang = 'en'>
	<meta charset="utf-8">
	<meta name = 'viewport' content="width-device-width, initial-scale=1.0">
	<script type="text/javascript" src = "jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src ="mainmenu.js"></script>
	<script type="text/javascript" src="loading.js"></script>
	<script type="text/javascript" src="sticky.js"></script>
	<title>Bernaung : Contact Us</title>
</head>
<body>

<!-- Menu navigasi -->
<div id ='header'>
	<div class="center">
	<h2>Bernaung</h2>
		<div class = "navigation">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="portofolio.html">Portofolio</a></li>
				<li><a href="kontak.html">Contact</a></li>
				<li><a href="#" class ="menu" >Order</a>
				<ul class = "drp">
					<a href="#">Build</a>
					<a href="#">Renovation</a>
				</ul>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<!-- banner -->
<div id="banner">
	<div class="center">
	<h1 class="contact">Contact Us</h1>
	<h2>To Contact Us Please Complete The Form Bellow</h2>
	</div>
</div>

<div id="form">
	<div class="center">
	<form action="proses.php"  method="post">
		<h4>Nama</h4>
		<input type="text" name="name" placeholder="Nama Anda" required="">
		<h4>Email</h4>
		<input type="email" name="email" placeholder="Email Anda" required="">
		<h4>Subject</h4>
		<input type="text" name="subject" placeholder="Subject" required="">
		<h4>Message</h4>
		<textarea name="message" placeholder="Tulis pesan Anda disini" required=""></textarea><br>
		<input type="submit" name="submit" value="Submit">
		<div class="clear"> 
		</div>
		<div class="succes"><? echo $succes; ?></div>
		</form>
	</div>
	<div class="clear"></div>
	<div class="right">
		<h3>Address</h3>
			Jl Letnan Arsyad <br>
			RT 06/RW 12 Kel Kayuringin <br>
			Bekasi Selatan <br>
	</div>
	
</div>


<!-- this for footer -->
<div id="footer">
	<div class="center">
		<h3>&copy 2017 Bernaung.com</h3>
	</div>
</div>

</body>
</html>
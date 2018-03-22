<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="renovasi.css">
<head lang = 'en'>
    <meta charset="utf-8">
    <meta name = 'viewport' content="width-device-width, initial-scale=1.0">    
    <script type="text/javascript" src = "jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src ="mainmenu.js"></script>
    <script type="text/javascript" src="loading.js"></script>
    <script type="text/javascript" src="sticky.js"></script>
    <script type="text/javascript" src="js/scrip.js"></script>
    <title>Renovation</title>

</head>
<body>
<!-- this for navbar -->
<div id ='header'>
    <div class="center">
    <h2>Bernaung</h2>
        <div class = "navigation">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="portofolio.php">Portofolio</a></li>
                <li><a href="index.html #kontak" class="menu">Contact</a></li>
                <li><a href="index.html #ourservices" class ="menu" >Order</a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- this for form -->
<h1 align="center">Renovation Form</h1>
<div id="form">
    <form method="post" action="input_rev.php" enctype="multipart/form-data" >
        <table cellpadding="0" cellspacing="0" border="0" align="center">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama" required="Isi nama Anda dengan benar"></td>
            </tr>
            <tr>
                <td>Tanda Pengenal</td>
                <td><input type="text" name="id_user" placeholder="Masukan Nomor Tanda Pengenal Anda" required="Isi tanda pengenal anda dengan benar"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="example@mail.com" required="jangan kosongkan bagian ini"></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td><input type="text" name="notlp" placeholder="Masukan Nomor Yang Dapat Dihubungi"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea type="text" name="alamat" placeholder="Masukan Alamat Anda" required="Isi alamat anda"></textarea></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea type="text" name="keterangan" placeholder="Masukan Keterangan rumah yang akan direnovasi"></textarea></td>
            </tr>
            <tr>
                <td>Upload Foto Rumah</td>
                <td><input type="file" name="pic"><br>
                <p>Gambar Tidak Boleh Lebih Dari 1 MegaByte</p></td>
                
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="Submit"  >
                    <input type="reset" value="Cancel" ></td>
            </tr>
        </table>
        </form>

    </div> 
    
    <!-- this for footer -->
<div id="footer">
    <div class="center">
        <h3>&copy 2017 Bernaung.com</h3>
    </div>
</div>

</body>
</html>
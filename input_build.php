<?php	
include"koneksi.php";
if(isset($_POST['simpan'])) {
$nama =$_POST['nama'];
$id_user =$_POST['id_user'];
$jenis =$_POST['jenis'];
$alamat =$_POST['alamat'];
$email =$_POST['email'];
$notlp =$_POST['notlp'];
$tanggal =date('Y-m-d');
$keterangan=$_POST['keterangan'];

echo "Nama Anda Adalah $nama <br>
	  No KTP Anda Adalah $id_user<br>
	  Jenis Yang Anda Pilih Adalah $jenis <br>
	  Alamat Anda Adalah $alamat <br>
	  Email Anda Adalah $email <br>
	  No Telpon Anda Adalah $notlp <br>
	  Tanggal : $tanggal <br>
	  Keterangan :	$keterangan";
 
}
 ?>
<?php 
include"koneksi.php";
if(isset($_POST['simpan'])) {
$nama =$_POST['nama'];
$id_user =$_POST['id_user'];
$alamat =$_POST['alamat'];
$email =$_POST['email'];
$notlp =$_POST['notlp'];
$tannggal =date('Y-m-d');
$keterangan=$_POST['keterangan'];
$lokasi_file=$_FILES['pic']['tmp_name'];
$nama_file=$_FILES['pic']['name'];


 echo "<h1 align='center'>Data Yang Anda Masukan Sukses</h1>
		<table cellspacing=0 cellpading=0 border=0 align='center'>
			<tr>
			<td>Nama :</td>
			<td>$nama</td>
			</tr>
			<tr>
			<td>Tanda pengenal :</td>
			<td> $id_user</td>
			</tr>
			<tr>
			<td>Alamat :</td>
			<td>$alamat</td>
			</tr>
			<tr>
			<td>Email :</td>
			<td>$email </td>
			</tr>
			<tr>
			<td>Gambar :</td>
			<td><img src='admin/data_pic/$nama_file'  width =550 height=550></td>
			</tr>	
				</table>
				<h3><a href='renovasi.php'>Kembali</a>"
							;
						
}
 

 ?>

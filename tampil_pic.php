<?php 

include"koneksi.php";
$sql = "select * FROM renovasi";
$tampil = mysqli_query($conn,$sql);
while($data = mysqli_fetch_array($tampil,MYSQLI_ASSOC)){
// Tampilkan Gambar
echo "<h1 align='center'>Data Yang Anda Masukan Sukses</h1>
		<table cellspacing=0 cellpading=0 border=1 align='center'>
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
			<td><img src='data_pic/$data[pic]' width='200px' height='200px'/></td>
			</tr>	
				</table>";
}
?>  
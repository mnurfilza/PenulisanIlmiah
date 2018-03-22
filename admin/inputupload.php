<?php 
include"../koneksi.php"; 
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$tanggal =date('Y-m-d');
$lokasi_file=$_FILES['pic']['tmp_name'];
$nama_file=$_FILES['pic']['name'];

move_uploaded_file($lokasi_file,"data_foto/$nama_file");

mysqli_query($conn,"INSERT INTO portofolio (nama,alamat,pic,tanggal) 
VALUES ('$_POST[nama]','$_POST[alamat]','$nama_file','$tanggal')");
 
echo "<script>window.alert('Sukses Upload')
    window.location='uploading.php'</script>";
 

 ?>
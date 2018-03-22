<?php
//terima data input dari user
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
 
//konfigurasi kiriman
$to="choirfilza@gmail.com";
$subject="Kontak dari Form";
$from="From: $name";
 
//kirimkan ke email admin
if (mail($to, $subject, $message, $from )){
        echo 'SUCCESS: Pesan anda berhasil di kirim. <a href="kontak.php">Kembali</a>';
    }else{
        echo 'ERROR: Pesan anda gagal di kirim silahkan coba lagi. <a href="kontak.php">Kembali</a>';
    }
?>
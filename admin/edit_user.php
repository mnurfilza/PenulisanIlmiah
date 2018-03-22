<?php	
session_start();

if (empty($_SESSION['id']) AND empty($_SESSION['password']))
{
  echo "Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=login.php><b>LOGIN</b></a></center>";
}
else
{
include "config.php";

$edit = mysqli_query($mysqli,"select * from build where email ='$_GET[id]'");

$r=mysqli_fetch_array($edit);

	echo "<center><h2>Edit User</2></center>
	<form enctype=multipart/form-data method=post
action=update_user.php>

	<input type=hidden name=id value='$r[email]'>
	
	<table align=center border=1>
	<tr><td>Email</td>
	<td>
	: $r[email]
	</td>
	</tr>
	
	<tr>
	 
	 <td> Nama</td>
	 <td>
	: <input type = text name=nama value ='$r[nama]'>
	</td>
	</tr>
	
	 <tr>
	 
	 <td> id_user </td>
	 <td>
	: <input type = text name=di_user value ='$r[id_user]'>
	</td>
	</tr>
	
	<tr>
	 
	
	 <tr>
	 <td colspan=2>
	 <input type=submit value=update>
	 <input type=reset value=cancel onClick=self.history.back()>
	 </td>
	 </tr>
	 	</table>
		</form>";
	
	 
	 
}

?>
<h1 align="center"> INPUT GAJI KARYAWAN </h1>


<form method="post" action="input.php">

	<table border="10" cellpadding="5" cellspacing="0" align="center" bgcolor="#33FF99">
    	<tr> 
                  <td> Nama Karyawan</td>
              <td>
                  <input type="text" name="kry">
                </td>
           </tr>
      
      <tr> 
                	<td> Pekerjaan </td>
        			<td>
            		<select name=kode>
                    
                    <option type=text value=0>Pilih Salah Satu
                    <option type=text value=Tukang>Tukang
                    <option type=text value=Kenek>Kenek
                    
                    </option>
                    
                    </select>
             		</td>
           </tr>
           <td>Tanggal Gajian </td>
              <td>
              <!--Pembuatan tgl dengan or-->
                   <select name="tanggal">
                       <option value="0" selected="selected">Tanggal
                         <?php
						              for ($tgl=1;$tgl<32;$tgl++)
							             echo "<option value=$tgl>$tgl";#fungsi untuk menampilkan tanggal
						              ?>
                       </option> 
                  </select>
                  
                 <!--Pembuatan bulan dengan -->
                 <select name="bulan">
                       <option value="0" selected="selected">Bulan
                       <option value="1">Januari
                       <option value="2">February
                       <option value="3">Maret
                       <option value="4">April
                       <option value="5">Mei
                       <option value="6">Juni
                       <option value="7">Juli
                       <option value="8">Agustus
                       <option value="9">September
                       <option value="10">October
                       <option value="11">November
                       <option value="12">Desember
                       </option>
                       </select>  
                       
                       <!--Pembuatan Tahun-->
                       <Select name="tahun">
                            <option value="0" selected="selected">Tahun
                            <?php
							    
							   /*$sekarang=(integer) date("Y");
							    for ($th=$sekarang;$th<=($sekarang+100);$th++)
							    echo "<option value=$th>$th<br>";
							   */
							     for ($th=1950;$th<3000;$th++)
								 echo "<option value=$th>$th<br>";#fungsi untuk menampilkan tahun
							
							
							?>
                            </option>
                            </Select>              
              
              </td>
       
       </tr> 
        
    	<tr> 
        	<td> Jumlah Hari Kerja</td>
        	<td>
            		<input type=text name=jml size=5>
             </td>
           </tr>
           <tr> 
           	<td>Kontak Person</td>
            	<td>	
            		<select name=kp>
                    	<option type=text value=Sule selected="selected"> Sule
                        <option type=text value=Andri > Andri
                        <option type=text value=Aziz > Aziz
                        <option type=text value=Kartika > Kartika
                         
                        </option>
                    
                    </select>
            
            		</td>
           </tr>
           
           <tr> 
        	<td> Keterangan</td>
        	<td>
            		<textarea cols="30" rows="5" name=ket>
                    
                    </textarea>
             </td>
           </tr>
           
           <tr> 
           		<td>
                <input type="submit" value="save">
                <input type="reset" value="cancel">
                </td>
           </tr>
           
           
    </table>




</form>
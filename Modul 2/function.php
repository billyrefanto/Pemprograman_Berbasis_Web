<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
	<style type="text/css">
		
		
		td{
			font-weight: bold;
		}
		#kiri{
			width: 300px;
		}
		#kanan {
			width: 300px;
		}


	</style>
</head>
<body>
	<form method="post" action="function.php">
		<label>
			Nama : <input type="text" name="nama" placeholder="Masukan Nama anda"> 
		</label><br>
		<label>
			Nim : <input type="text" name="nim" placeholder="Masukan nim anda">
		</label><br>
		<label>Kelas :</label>
            <select name="kelas">
                <option value="D3IF-43-01">D3IF-43-01</option>
                <option value="D3IF-43-02">D3IF-43-02</option>
                <option value="D3IF-43-03">D3IF-43-03</option>
                <option value="D3IF-43-04">D3IF-43-04</option>
            </select> <br>
		<input type="submit" name="submit" class="submit">
		
	</form>
	<fieldset>
	<table>
			<tr>
				<td id="kiri">Ini adalah Tampilan awal : </td>
				<td id="kanan">
					<?php
						echo  $_POST ['nama']. " ";
						echo  $_POST ['nim'] ." ";
						echo  $_POST ['kelas'];
					?>
				</td>
			</tr>
			<tr>
				<td id="kiri"> </td>
				<td id="kanan">
					<?php
						echo substr($_POST['nama'], 0,5)."<br>";
						echo substr($_POST['nama'], 5,5)."<br>";
						echo substr($_POST['nama'], 10,13)."<br>";
					?>
				</td>
			</tr>

				<tr>
					<td>Baris baru setelah String ke-7 :</td>
					<td><?php echo substr($_POST['nim'], 0,7); ?></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo substr($_POST['nim'], 7); ?></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo substr($_POST['kelas'], 0,7); ?></td>
				</tr>
				<tr>
					<td></td>
					<td><?php echo substr($_POST['kelas'], 7); ?></td>
				</tr>
				<tr>
					<td>Panjang String keseluruhan :	</td>
					<td>
						<?php
							$strlength = strlen($_POST['nama']) + strlen ($_POST['kelas']) + strlen($_POST['nim']);
							echo "$strlength";
						?>
					</td>
				</tr>
				<tr>
					<td>Mengambil kata pada indeks yang ke-2 :	</td>
					<td>
						<?php
							echo ($_POST['nim']);
						?>
					</td>
				</tr>
				<tr>
					<td>Angkatan :	</td>
					<td>
						Angkatan 20<?php echo substr($_POST['nim'], 4,-4); ?>
					</td>
				</tr>
				<tr>
					<td>NIM anda adalah :	</td>
					<td>
						<?php
							$nim = substr($_POST['nim'], 7);
							if ($nim % 2 == 0) {
								echo strrev("Genap");
							}
							if ($nim % 2 == 1){
								echo strrev("Ganjil");
							}
						?>
					</td>
				</tr>
				<tr>
					<td>Anda mengerjakan tanggal :	</td>
					<td>
						<?php 
							date_default_timezone_set('asia/jakarta'); 
							echo date('d-m-y');
						?>
					</td>
				</tr>
				<tr>
					<td>Pukul :	</td>
					<td>
						<?php 
							date_default_timezone_set('asia/jakarta'); 
							echo date('H:i:s');
						?>
					</td>
				</tr>
			
			<!-- <tr>
				<td>3</td>
				<td>strtoupper()</td>
				<td>
					<?php
						echo strtoupper($name);
					?>
				</td>
			</tr>
			<tr>
				<td>4</td>
				<td>strtr()</td>
				<td>
					<?php
						echo strtr("$name","o","a");
					?>
				</td>
			</tr>
			<tr>
				<td>5</td>
				<td>ltrim()</td>
				<td>
					<?php
						echo trim("$name","Refa");
					?>
				</td>
			</tr>
			<tr>
				<td>6</td>
				<td>max()</td>
				<td>
					<?php
						echo(max(2,4,6,8,10));
					?>
				</td>
			</tr>
			<tr>
				<td>7</td>
				<td>array_sum()</td>
				<td>
					<?php
					$a=array(5,15,25);
					echo array_sum($a);
					?>
				</td>
			</tr>
			<tr>
				<td>8</td>
				<td>min()</td>
				<td>
					<?php
						echo(min(2,4,6,8,10));
					?>
				</td>
			</tr>
			<tr>
				<td>9</td>
				<td>cal_days_in_month()</td>
				<td>
					<?php
						$d=cal_days_in_month(CAL_GREGORIAN,2,2020);
						echo "There was $d days in February 2020";
					?>
				</td>
			</tr>
			<tr>
				<td>10</td>
				<td>date_default_timezone_get()</td>
				<td>
					<?php
						echo date_default_timezone_get("asia/jakarta");
					?>
				</td>
			</tr>
			<tr>
				<td>11</td>
				<td>date_default_timezone_set()</td>
				<td>
					<?php
					date_default_timezone_set("Asia/Jakarta");
					echo date_default_timezone_get("Asia/Jakarta");
					?>
				</td>
			</tr>
 -->
	</table>
</fieldset>

	

</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
		a:link { text-decoration: none; }
	</style>
	<body style="background-color:aliceblue;">
	</body>
</head>
<body bgcolor="orange">
	<table  width="100%">
		<tr>
	<table  width="100%">
		</div>	
		<body>
		<p align=left><b>
		</b>
			
			<ul></li style="list-style-type:none;">
			<li><center>
			<h1> SELAMAT DATANG GUYSSS DIHALAMAN WULAN </h1>
			</center>
		
	</li>
		<ul>
			<td width="30%">
			<b><u>MENU SEBELAH KIRI</u></b><br>
			<ul>
				<li>
					<a href="beranda.html">
					Beranda
					</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Lihat Pengguna</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Tambah Pengguna</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Hapus Pengguna</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Edit Pengguna</a>
				</li>
			</ul>
			</td>
			<td>
			<b><u>LIST PENGGUNA</u></b><br>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
				?>
				<table border="1">
					
					<tr>

						<td>
							<b>
							No
						</b>
						</td>
						<td>
							<b>
							Nama Pengguna
						</b>
						</td>
						<td>
							<b>
							Sandi Pengguna
						</b>
						</td>
							<td>
							<b>
							Aksi
						</td>
					</b>
					</tr>
				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['id_pengguna'];
					echo"</td><td>";
					echo $row['nama_pengguna'];
					echo"</td><td>";
					echo $row['sandi_pengguna'];
					echo"</td>
					<td>";
					echo"
						<a href='hapus.php?apanih=".$row['nama_pengguna']."		'>hapus</a>
					";	
					echo"&nbsp&nbsp&nbsp
					<a href='update_data.php?katasandi=".$row['sandi_pengguna']."&nama=".$row['nama_pengguna']."&katasandi=".$row['sandi_pengguna']."		'>edit</a>
					";

				}
			?>
			</table>
			<br>
			<button><a  href="tambah_pengguna.php">Tambah Pengguna</a></button>
			</td>
		</tr>
	</table>
</body>
</html>
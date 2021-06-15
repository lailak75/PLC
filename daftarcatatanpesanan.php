<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pemesanan Laundry | PLC (PPKU Laundry Center)</title>
</head>

<body>
	<header>
		<h3>Catatan Pesanan Laundry</h3>
	</header>

	<nav>
		<a href="halamanawal.php">[<] Halaman Awal</a>
	</nav>

	<nav>
		<a href="formpesanan.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>ID Pesanan</th>
		 	<th>NIM Mahasiswa</th>
		 	<th>ID Usaha</th>
		 	<th>Jenis Barang</th>
		 	<th>Berat Barang </th>
		  	<th>Total Harga</th>
		  	<th>Tanggal Masuk</th>
		  	<th>Tanggal Selesai</th>
		  	<th>ID Karyawan</th>
			<th>ID Admin</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = pg_query("SELECT * FROM catatan_pesanan");
		// $query = mysqli_query($db, $sql);


		while($catatan = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$catatan['idpesanan']."</td>";
			echo "<td>".$catatan['idmahasiswa']."</td>";
			echo "<td>".$catatan['idusaha']."</td>";
			echo "<td>".$catatan['jenis_barang']."</td>";
			echo "<td>".$catatan['berat_barang']."</td>";
			echo "<td>".$catatan['total_harga']."</td>";
			echo "<td>".$catatan['tanggal_masuk']."</td>";
			echo "<td>".$catatan['tanggal_keluar']."</td>";
			echo "<td>".$catatan['idkaryawan']."</td>";
			echo "<td>".$catatan['idadmin']."</td>";

			echo "<td>";
			echo "<a href='hapus.php?idpesanan=".$catatan['idpesanan']."'>Hapus</a>";
			echo "</td>";

			echo "<td>";
			echo "<a href='formedit.php?idpesanan=".$catatan['idpesanan']."'>Edit</a>";
			echo "</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>
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


		while($catatanpesanan = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$catatanpesanan['idpesanan']."</td>";
			echo "<td>".$catatanpesanan['idmahasiswa']."</td>";
			echo "<td>".$catatanpesanan['idusaha']."</td>";
			echo "<td>".$catatanpesanan['jenis_barang']."</td>";
			echo "<td>".$catatanpesanan['berat_barang']."</td>";
			echo "<td>".$catatanpesanan['total_harga']."</td>";
			echo "<td>".$catatanpesanan['tanggal_masuk']."</td>";
			echo "<td>".$catatanpesanan['tanggal_selesai']."</td>";
			echo "<td>".$catatanpesanan['idkaryawan']."</td>";
			echo "<td>".$catatanpesanan['idadmin']."</td>";

			echo "<td>";
			echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
			echo "</td>";

			echo "<td>";
			echo "<a href='formedit.php?id=".$siswa['id']."'>Edit</a>";
			echo "</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>
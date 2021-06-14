<?php
include("config.php");

$idpesanan = $_GET['idpesanan'];

$query = pg_query("SELECT * FROM catatan_pesanan WHERE idpesanan=$idpesanan");
$catatan = pg_fetch_array($query);

if( pg_num_rows($query) < 1){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pemesanan Laundry | PLC (PPKU Laundry Center)</title>
</head>

<body>
	<header>
		<h3>Formulir Pemesanan Laundry PLC</h3>
	</header>

	<form action="prosesedit.php" method="POST">
		<fieldset>
		<input type="hidden" name="idpesanan" value="<?php echo $catatan['idpesanan'] ?>" />
		<p>
			<label for="idpesanan">ID Pesanan: </label>
			<input type="text" name="idpesanan" placeholder="ID Pesanan" />
		</p>
		<p>
			<label for="idmahasiswa">NIM Mahasiswa: </label>
			<input type="text" name="idmahasiswa" placeholder="NIM Mahasiswa" />
		</p>
		<p>      
			<label for="idusaha">ID Usaha: </label>
			<input type="text" name="idusaha" placeholder="ID Usaha" />    
		</p>
		<p>
			<label for="jenis_barang">Jenis Barang: </label>
			<input type="text" name="jenis_barang" placeholder="Jenis Barang" />
		</p>
		<p>
			<label for="berat_barang">Berat Barang: </label>
			<input type="number" name="berat_barang" min="1" max="100" step="1" />
		</p>
		<p>
			<label for="total_harga">Total Harga: </label>
			<input type="text" name="total_harga" placeholder="Total Harga" />
		</p>
		<p>
			<label for="tanggal_masuk">Tanggal Masuk: </label>
			<input type="date" name="tanggal_masuk" placeholder="DD/MM/YYYY" />
		</p>
		<p>
			<label for="tanggal_keluar">Tanggal Selesai: </label>
			<input type="date" name="tanggal_keluar" placeholder="DD/MM/YYYY" />
		</p>
		<p>
			<label for="idkaryawan">ID Karyawan: </label>
			<input type="text" name="idkaryawan" placeholder="ID Karyawan" />
		</p>
		<p>
			<label for="idadmin">ID Admin: </label>
			<input type="text" name="idadmin" placeholder="ID Admin" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		</fieldset>
	</form>

	</body>
</html>

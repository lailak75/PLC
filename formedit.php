<?php
include("config.php");

$idpesanan = $_GET['idpesanan'];

$query = pg_query("SELECT * FROM catatan_pesanan WHERE idpesanan=$idpesanan");
$catatanpesanan = pg_fetch_array($query);

if( pg_num_rows($query) < 1){
	die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Perubahan Data Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Perubahan Data Siswa Baru</h3>
	</header>

	<form action="prosesedit.php" method="POST">
		<fieldset>
		<input type="hidden" name="idpesanan" value="<?php echo $catatanpesanan['idpesanan'] ?>" />
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
			<input type="text" name="berat_barang" placeholder="Berat Barang" />
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
			<label for="tanggal_selesai">Tanggal Selesai: </label>
			<input type="date" name="Tanggal Selesai" placeholder="DD/MM/YYYY" />
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
			<input type="submit" value="simpan" name="simpan" />
		</p>
		</fieldset>
	</form>

	</body>
</html>
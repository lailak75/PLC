<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	$idpesanan = $_POST['idpesanan'];
	$jb = $_POST['jenis_barang'];
	$bb = $_POST['berat_barang'];
	$th = $_POST['total_harga'];
	$tm = $_POST['tanggal_masuk'];
	$tk = $_POST['tanggal_keluar'];
	$idmahasiswa = $_POST['idmahasiswa'];
	$idusaha = $_POST['idusaha'];

	// buat query
	$query = pg_query("INSERT INTO catatan_pesanan (idpesanan, jenis_barang, berat_barang, total_harga, tanggal_masuk, tanggal_keluar, idmahasiswa, idusaha) VALUES ('$idpesanan', '$jb', '$bb', '$th', '$tm', '$tk', '$idmahasiswa', '$idusaha')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman halamanawal.php dengan status=sukses
		header('Location: halamanawal.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman halamanawal.php dengan status=gagal
		header('Location: halamanawal.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>

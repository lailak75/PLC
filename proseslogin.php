<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['login'])){

	// ambil data dari formulir
	$idadmin = $_POST['idadmin'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	// buat query
	$query = pg_query("INSERT INTO admin (idadmin, username, password) VALUES ('$idadmin', '$username', '$password')");
	

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: halamanawal.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman index.php dengan status=gagal
		header('Location: halamanawal.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>

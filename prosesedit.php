<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

	$idpesanan = $_POST['idpesanan'];
	$idmahasiswa = $_POST['idmahasiswa'];
	$idusaha = $_POST['idusaha'];
	$jb = $_POST['jenis_barang'];
	$bb = $_POST['berat_barang'];
	$th = $_POST['total_harga'];
	$tm = $_POST['tanggal_masuk'];
	$ts = $_POST['tanggal_selesai'];
	$idkaryawan = $_POST['idkaryawan'];
	$idadmin = $_POST['idadmin'];

	// buat query update
	$query = pg_query("UPDATE catatan_pesanan
	SET idpesanan='$idpesanan', idmahasiswa='$idmahasiswa', idusaha='$idusaha', jenis_barang='$jb', berat_barang='$bb', total_harga='$th', tanggal_masuk='$tm', tanggal_selesai='$ts', idkaryawan='$idkaryawan', idadmin='$idadmin'
	WHERE idpesanan=$idpesanan");

	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman daftarsiswa.php
		header('Location: daftarcatatanpesanan.php');
	} else {
		// kalau gagal tampilkan pesan "gagal menyimpan..."
		die("Gagal menyimpan perubahan...");
	}

} else {
	die("Akses dilarang...");
}
?>
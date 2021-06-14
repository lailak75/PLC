<?php
include("config.php");
if( isset($_GET['id']) ){
	$idpesanan = $_GET['idpesanan'];
	$query = pg_query("DELETE FROM catatan_pesanan WHERE idpesanan=$idpesanan");
	if($query){
		header('Location: daftarcatatanpesanan.php');
	} else {
		die("gagal menghapus....");
	}
} else {
	die("akses dilarang...");
}
?>
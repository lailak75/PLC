<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Pendaftaran Siswa Baru</h3>
		<h1>SMK Coding</h1>
	</header>

	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="formpesanan.php">Pesanan Baru</a></li>
			<li><a href="daftarcatatanpesanan.php">Daftar Catatan Pesanan</a></li>
		</ul>
	</nav>


	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pesanan berhasil!";
			} else {
				echo "Pesanan gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	</body>
</html>
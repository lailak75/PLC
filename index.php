<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pemesanan Laundry | PLC (PPKU Laundry Center)</title>
</head>

<body>
	<header>
		<h3>PPKU Laundry Center</h3>
		<h1>(PLC)</h1>
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

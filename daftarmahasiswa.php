<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa | PLC (PPKU Laundry Center)</title>
</head>

<body>
	<header>
   		<h3>Daftar Mahasiswa PPKU | PLC</h3>
	</header>

	<nav>
		<a href="halamanawal.php">[<] Halaman Awal</a>
	</nav>

    	<br>

    	<table border="1">
    	<thead>
   		 <tr>
   			<th>ID Mahasiswa</th>
   		 	<th>Nama</th>
   		 	<th>Alamat Asrama</th>
   		 	<th>No Telepon</th>
   	 	</tr>
    	</thead>
    	<tbody>

    		<?php
    		$query = pg_query("SELECT * FROM mahasiswa");
    		// $query = mysqli_query($db, $sql);


    		while($mahasiswa = pg_fetch_array($query)){
   			echo "<tr>";

   			echo "<td>".$mahasiswa['idmahasiswa']."</td>";
   			echo "<td>".$mahasiswa['nama']."</td>";
   			echo "<td>".$mahasiswa['alamat_asrama']."</td>";
   			echo "<td>".$mahasiswa['notelepon']."</td>";
		
			echo "</tr>";
   			
			}

 		?>
	</tbody>
	</table>

    	<p>Total: <?php echo pg_num_rows($query) ?></p>

    	</body>
</html>

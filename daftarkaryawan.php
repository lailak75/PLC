<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Karyawan | PLC (PPKU Laundry Center)</title>
</head>

<body>
	<header>
   		<h3>Daftar Karyawan PLC</h3>
	</header>

	<nav>
		<a href="halamanawal.php">[<] Halaman Awal</a>
	</nav>

    	<br>

    	<table border="1">
    	<thead>
   		 <tr>
   			<th>ID Karyawan</th>
   		 	<th>Alamat</th>
   		 	<th>Nama</th>
   		 	<th>No Telepon</th>
   		 	<th>Id Usaha </th>
   	 	</tr>
    	</thead>
    	<tbody>

    		<?php
    		$query = pg_query("SELECT * FROM karyawan");
    		// $query = mysqli_query($db, $sql);


    		while($karyawan = pg_fetch_array($query)){
   			echo "<tr>";

   			echo "<td>".$karyawan['idkaryawan']."</td>";
   			echo "<td>".$karyawan['alamat']."</td>";
   			echo "<td>".$karyawan['nama']."</td>";
   			echo "<td>".$karyawan['notelepon']."</td>";
   			echo "<td>".$karyawan['idusaha']."</td>";
			
   			
			echo "</tr>";
   			
			}

 		?>
	</tbody>
	</table>

    	<p>Total: <?php echo pg_num_rows($query) ?></p>

    	</body>
</html>

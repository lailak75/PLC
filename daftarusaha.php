<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Usaha Laundry| PLC (PPKU Laundry Center)</title>
</head>

<body>
	<header>
   		<h3>Daftar Usaha Laundry PLC</h3>
	</header>

	<nav>
		<a href="halamanawal.php">[<] Halaman Awal</a>
	</nav>

    	<br>

    	<table border="1">
    	<thead>
   		 <tr>
   			<th>ID Usaha</th>
   		 	<th>Nama</th>
   		 	<th>Alamat</th>
   		 	<th>No Telepon</th>
   	 	</tr>
    	</thead>
    	<tbody>

    		<?php
    		$query = pg_query("SELECT * FROM usaha_laundry");
    		// $query = mysqli_query($db, $sql);


    		while($usaha_laundry = pg_fetch_array($query)){
   			echo "<tr>";

   			echo "<td>".$usaha_laundry['idusaha']."</td>";
   			echo "<td>".$usaha_laundry['nama']."</td>";
   			echo "<td>".$usaha_laundry['alamat']."</td>";
   			echo "<td>".$usaha_laundry['notelepon']."</td>";
   		
			echo "</tr>";
   			
			}

 		?>
	</tbody>
	</table>

    	<p>Total: <?php echo pg_num_rows($query) ?></p>

    	</body>
</html>

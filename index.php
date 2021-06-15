<!DOCTYPE html>
<html>
<head>
	<title>PLC (PPKU Laundry Center)</title>
</head>

<body>
	<header>
		<h3>Log In PLC (PPKU Laundry Center)</h3>
	</header>

	<form action="proseslogin.php" method="POST">
		<fieldset>
		<p>
			<label for="idadmin">ID Admin: </label>
			<input type="text" name="idadmin" placeholder="id admin" />
		</p>
		<p>
			<label for="username">Username: </label>
			<input type="text" name="username" placeholder="username" />
		</p>
		<p>
			<label for="password">Password: </label>
			<input type="password" name="password" placeholder="password" />
		</p>
		<p>
			<input type="submit" value="Log In" name="login" />
		</p>
		</fieldset>
	</form>
	</body>
</html>

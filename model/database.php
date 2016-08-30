<?php

function dbConnect($adminuser, $adminpass, $dbname) {
	$dsn = 'pgsql:dbname=$dbname;host=127.0.0.1';
	$user = '$adminuser';
	$password = '$adminpass';

	try {
		$dbh = new PDO($dsn,$user, $password);
	} catch (PDOException $error) {
		echo 'Connection failed: ' . $error->getMessage();
	}
}


?>

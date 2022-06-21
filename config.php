<?php
	$servername = 'localhost';
	$user = 'root';
	// $pass = 'zudcu35z3zeb5puz';
	$dbname = 'yesbank';

	$conn = mysqli_connect($servername,$user);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}
	mysqli_select_db($conn, $dbname);
?>

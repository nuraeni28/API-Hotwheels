<?php
	$key = $_GET['key'];

	//echo $key;

	//koneksi db
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hotwheels";

		//create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		//cek user
		$sql = "SELECT * FROM user WHERE key_token='$key'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "Key/token valid";
		}else{
			echo "Key/token not valid";
		}

?>
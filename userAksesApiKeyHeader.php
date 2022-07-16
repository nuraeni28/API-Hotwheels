<?php

	$header = apache_request_headers();
	//var_dump($header);die;

	$key = $header['key'];
	//echo $key;die;


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
<?php
	session_start();

	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$pwd = md5($_POST['pwd']);

		//koneksi db
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hotwheels";

		//create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		//cek user
		$sql = "SELECT * FROM user WHERE username='$uname' AND password='$pwd'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$_SESSION['uname']=$uname;
			$_SESSION['pwd']=$pwd;
			echo "login berhasil";
		}else{
			echo "login salah";
		}
	}

?>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Generate API Key/Token</title>
</head>
<body>
	<form action="userGenerateKey.php" method="post">
		<input type="hidden" name="uname" value="<?php echo $_SESSION['uname']; ?>">
		<input type="hidden" name="pwd" value="<?php echo $_SESSION['pwd']; ?>">
		
		<input type="submit" name="submit" value="Generate Key/Token">

	</form>

</body>
</html> -->

<?php
	session_start();

	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$pwd = md5($_POST['pwd']);
		$msg = '';

		//koneksi db
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hotwheels";	

		//create connection
		$conn = new mysqli($servername, $username, $password, $dbname);	
		

		// if (!empty($uname) && !empty($password)) {
        //     if( cek_nama($uname,$conn) == 0 ){

          
            if(!empty($uname) && !empty($pwd)){
				$query = "SELECT * FROM user where username='$uname'";
				$cekNama = $conn->query($query);

				if($cekNama->num_rows==0){
				$sql = "INSERT INTO user (username,password) VALUES ('$uname','$pwd')";
				$result = $conn->query($sql);
				
				echo("<script>alert('Register Berhasil!')</script>");
				echo("<script>window.location = 'userLogin.php';</script>");
			}
			else{
				echo "Username sudah ada! Silahkan ganti dengan username yang lain!";
			}
		}
			else{
				echo "Tidak ada data yang boleh kosong! Silahkan isi kembali";
			}
			
		}
	
		
// 	}
// }
   

?>
<!DOCTYPE html>
<html>
<head>
<title>User API Register</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
    <label>Username</label><br>
    <input type="text" name="uname"><br/><br>

    <label>Password</label><br>
    <input type="password" name="pwd"><br/><br>

    <input type="submit" name="submit">

</form>
</body>

</html>
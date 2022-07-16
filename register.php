<?php
session_start();

if (isset($_POST['submit'])) {
  $uname = $_POST['uname'];
  $pwd = md5($_POST['pwd']);
  $cpwd = md5($_POST['cpwd']);
  $emptymsg = '';
  $unameError = " ";
  $pwdError = " ";

  //koneksi db
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hotwheels";

  //create connection
  $conn = new mysqli($servername, $username, $password, $dbname);


  // if (!empty($uname) && !empty($password)) {
  //     if( cek_nama($uname,$conn) == 0 ){


  if (!empty($uname) && !empty($pwd)) {
    if ($pwd == $cpwd) {
      $query = "SELECT * FROM user where username='$uname'";
      $cekNama = $conn->query($query);

      if ($cekNama->num_rows == 0) {
        $sql = "INSERT INTO user (username,password) VALUES ('$uname','$pwd')";
        $result = $conn->query($sql);

        echo ("<script>alert('Register Berhasil!')</script>");
        echo ("<script>window.location = 'userLogin.php';</script>");
      } else {
        $unameError = "*Username already taken";
      }
    } else {

      $pwdError = "*Password doesn't match";
    }
  } else {
     $emptymsg = "*Data can't be empty";
  }
}


// 	}
// }


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>

<body>
  <form action="register.php" method="post" enctype="multipart/form-data">
    <div class="container justify-content-center ">
      <div class="row">
        <div class="col-lg-5 mt-5">
          <div class="col-lg-12">
            <h1 class="mb-4"><kbd>&lt;Create your account&gt;</kbd></h1>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">User</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
            <span class="text-danger"><?php echo @$unameError; ?></span>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
            <span class="text-danger"><?php echo @$pwdError; ?></span>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Re-type your Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="cpwd">
          </div>
          <button type="submit" class="btn btn-dark" name="submit">Register</button>
          <div class="mt-2">
          <span class="text-danger text-center"><?php echo @$emptymsg; ?></span>
          </div>
          <div class="mt-2">
            <a href="index.php">I already have an account</a>
          </div>
  </form>
  </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
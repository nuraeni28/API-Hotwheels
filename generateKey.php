<?php
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
    
        $token = md5($uname.$pwd);
    
        //koneksi db
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hotwheels";
    
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        //update api key
        $sql = "UPDATE user SET key_token='$token' WHERE username='$uname' AND password='$pwd'";
        $result = $conn->query($sql);
          
    
    ?>    
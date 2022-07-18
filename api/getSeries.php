<?php
    //header hasil berbentuk json
    header("Content-Type:application/json");

    include '../connection.php';
    //tangkap key
    $header = apache_request_headers();

	$key = $header['key'];
	
    
    $method= $_SERVER['REQUEST_METHOD'];

    //variabel hasil
    $result = array();
    //cek user
	$sql = "SELECT * FROM user WHERE key_token='$key'";
	$user = $conn->query($sql);

    //cek metode
    if ($user-> num_rows > 0){
        if($method=='GET'){
            //response jika metode benar
            $result['status'] = [
                "code" => 200,
                "description" => 'Request Valid'
            ];
            if(isset($_GET['series'])){

            $series = $_GET['series'];
    
            //buat query
            $sql = "SELECT * FROM 2020hwcars WHERE series_name LIKE '%$series%'";
            //eksekusi query
            $hasil_query = $conn->query($sql);
            
           
            if ($hasil_query->num_rows > 0 ) {
                $result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
                
            }else{
                $result['status'] = [
                    "code" => 400,
                    "description" => 'None'
                ];
            }
            }
            
        }else{
            //response jika metode salah
            $result['status'] = [
                "code" => 400,
                "description" => 'Invalid Method'
            ];
        }
    }else{
            $result['status'] = [
                "code" => 400,
                "description" => 'API Key/Token Not Valid'
            ];
        }
    
    //tampilkan data dalam format json
    echo json_encode($result);

?>
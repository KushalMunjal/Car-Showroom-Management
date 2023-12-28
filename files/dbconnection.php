<?php 

$insert = false;

$servername = "localhost:3306";
$username = "root";
$password = "Kushal@MySQL";
$schemaname = "car_showroom";

$conn = mysqli_connect($servername,$username,$password,$schemaname);



    

    $sql = "SELECT *FROM car";
    $result = mysqli_query($conn,$sql);
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$schemaname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

    // if($result)
    // {
    //     $insert = true;
	// echo "Hello";
    // }
    // else
    // {
    //     echo "the record has not been inserted" . mysqli_error($conn);
    // }



?>
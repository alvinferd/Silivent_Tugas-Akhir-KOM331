<?php 
$koneksi = mysqli_connect("localhost","root","","silivent");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


#untuk syntax yang hash password

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "silivent";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: \n" . $e->getMessage());
}

?>
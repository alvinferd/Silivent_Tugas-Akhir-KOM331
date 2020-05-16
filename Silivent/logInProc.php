<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING); #filter username cuma boleh string, berdasarkan input post dari submit di html dengan nama 'username'
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); #filter password cuma boleh string, berdasarkan input post dari submit di html dengan nama 'password'

$sql = "SELECT * FROM user WHERE username=:username OR email=:email"; #Mengambil semua tabel user yang nilai username / email nya sama dengan inputan
$stmt = $db->prepare($sql); # menyiapkan database

// bind parameter yang di $sql diatas ke query
$params = array
  (
	":username" => $username,
	":email" => $username
  );

#eksekusi
$stmt->execute($params); 
$user = $stmt->fetch(PDO::FETCH_ASSOC);

#jika data user yang cocok ditemukan
if($user)
  {
	#password yang di store dan di compare ke db bukan plaintext, melainkan hasil enkripsi biar aman
	if(password_verify($password, $user["password"]))
	{
		session_start();
		$_SESSION['username'] = $user['username'];
		$_SESSION['stat'] = "login";
		$_SESSION['id']=$user['id'];
		$_SESSION['email']=$user['email'];
		$_SESSION['bio']=$user['bio'];
		$_SESSION['phone']=$user['phone'];
		$_SESSION['instansi']=$user['instansi'];
		$_SESSION['photo']=$user['photo'];
		if($user['status'] == 1){
			header("location:admin/index.php?id=".$_SESSION['id']);
			$_SESSION['admin'] = "TRUE";
			die();
		}else{
			header("location:user/index.php");
			die();
		}
	}
	#Password atau username lu ga cocok bosh
	else $message = "Invalid Username or Password!";
  }
#data usernya ga ada bosh
else $message = "Invalid Username or Password!";
?>
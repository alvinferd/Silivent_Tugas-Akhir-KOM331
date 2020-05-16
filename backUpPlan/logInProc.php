<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$tangkap = mysqli_fetch_array($data);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['stat'] = "login";
	$_SESSION['id']=$tangkap['id'];
	if($tangkap['status'] == 1){
		header("location:admin/index.php?id=".$_SESSION['id']);
		$_SESSION['admin'] = "TRUE";
		die();
	}else{
		header("location:user/index.php");
		die();
	}
}else{
	header("location:logIn.php?pesan=gagal");
}
?>
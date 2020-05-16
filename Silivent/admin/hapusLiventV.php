<?php
include("../config.php");
if(isset($_GET['id'])){
	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "delete from event where id=$id");

	if($query){
		header('Location: verifikasiLivent.php');
	}else{
		die("gagal menghapus...");
	}
}else{
	die("akses dilarang...");
}
?>
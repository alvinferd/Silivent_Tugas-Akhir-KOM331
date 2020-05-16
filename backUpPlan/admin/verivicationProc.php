<?php
include("../config.php");
if(isset($_GET['id'])){
	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "UPDATE event SET verivied = 1 WHERE id=$id");

	if($query){
		header('Location: verifikasiLivent.php');
	}else{
		die("gagal menghapus...");
	}
}else{
	die("akses dilarang...");
}
?>
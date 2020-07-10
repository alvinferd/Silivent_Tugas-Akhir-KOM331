<?php
include("../config.php");

if(isset($_POST['edit']) && isset($_GET['id'])){
	$target = "../img/".basename($_FILES['image']['name']);
	
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$image = $_FILES['image']['name'];
	$shortDesc = $_POST['shortDesc'];
	$longDesc = $_POST['longDesc'];
	$kategori = $_POST['kategori'];

	
  $query = mysqli_query($koneksi, "UPDATE event SET nama='$nama', image='$image', shortDesc='$shortDesc', longDesc='$longDesc', kategori='$kategori', verivied='0' WHERE id=$id");

	
	if ($query) {
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  			echo "
			<script>
				window.location = 'listLiventDiajukan.php?pesan=berhasil';
			</script>";	
  		}else{
  			echo 'Gagal Menambah Gambar!';
			echo '<a href="index.php">Kembali</a>';	
  		}
	}else{
		echo 'Gagal Mengedit Lomba/Event ! ';
		echo '<a href="index.php">Kembali</a>';	
	}
	}
	else{
		echo '<script>window.history.back()</script>';
	}
?>
<?php
if (isset($_POST['tambah'])) {
	session_start();
	include_once '../config.php';
	$target = "../img/".basename($_FILES['image']['name']);

	$nama = $_POST['nama'];
	$image = $_FILES['image']['name'];
	$shortDesc = $_POST['shortDesc'];
	$longDesc = $_POST['longDesc'];
	$kategori = $_POST['kategori'];
	$creator = $_POST['creator'];
	$institusi = $_POST['institusi'];
	$creator_id = $_SESSION['id'];


	$input = mysqli_query($koneksi,"INSERT INTO event VALUES (null, '$nama', '$image', '$shortDesc', '$longDesc', '$kategori', '$creator', '$institusi', '$creator_id', 0)");
	if ($input) {
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  			echo "
			<script>
				window.location = 'index.php?pesan=berhasil';
			</script>";	
  		}else{
  			echo 'Gagal Menambah Gambar!';
			echo '<a href="index.php">Kembali</a>';	
  		}
	}else{
		echo 'Gagal Menambah Lomba/Event ! ';
		echo '<a href="index.php">Kembali</a>';	
	}
	}
	else{
		echo '<script>window.history.back()</script>';
	}

?>
<?php
if (isset($_POST['tambah'])) {
	include_once 'config.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$ulangPass = $_POST['ulangPass'];

	$dataa = mysqli_query($koneksi,"select * from user where username='$username'");
	$datab = mysqli_query($koneksi,"select * from user where email='$email'");
	$ceka = mysqli_num_rows($dataa);
	$cekb = mysqli_num_rows($datab);

	if($cekb > 0){
		header("location:signUp.php?pesan=gagalemail");
		die();
	}
	if($ceka > 0){
		header("location:signUp.php?pesan=gagaluser");
		die();
	}
	if($ulangPass == $password){
		$input = mysqli_query($koneksi,"Insert into user values (null, '$username', '$password', '$email',0)");
		if ($input) {
		echo "
		<script>
			window.location = 'index.php?pesan=berhasil';
		</script>";	
	}else{
		echo 'Gagal membuat akun! ';
		echo '<a href="signUp.php">Kembali</a>';	
	}
	}
	else{
		header("location:signUp.php?pesan=passgagal");	
	}
	}
	else{
	echo '<script>window.history.back()</script>';
}

?>

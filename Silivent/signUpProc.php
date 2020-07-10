<?php
if (isset($_POST['tambah'])) 
{
	include_once 'config.php';

	
    // filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password biar aman
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query seperti saat login
    $sql = "INSERT INTO user (namaLengkap, username, email, password) 
            VALUES (:nama, :username, :email, :password)";
    #menyiapkan database
    $stmt = $db->prepare($sql);

    // bind parameter ke query agar bisa dieksekusi
    $params = array(
        ":nama" => $nama,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
	if($saved)
	{
		echo "
		<script>
			window.location = 'index.php?pesan=berhasil';
		</script>";	
	}
	else{
		echo 'Gagal membuat akun! ';
		echo '<a href="signUp.php">Kembali</a>';	
	}
}

?>
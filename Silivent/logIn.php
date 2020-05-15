<?php 
#mengakses config.php
require_once("config.php");


#set variabel message, nnti bakal dipake untuk nyimpan isi pesan login berhasil atau nerror
$message = "";


if(isset($_POST['login'])) #Jika tombol login dipencet, maka perintah perintah berikut akan dieksekusi :
  {

      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING); #filter username cuma boleh string, berdasarkan input post dari submit di html dengan nama 'username'
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); #filter password cuma boleh string, berdasarkan input post dari submit di html dengan nama 'password'

      $sql = "SELECT * FROM users WHERE username=:username OR email=:email"; #Mengambil semua tabel user yang nilai username / email nya sama dengan inputan
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
            session_start(); #Mulai session baru, dimana
            $_SESSION["user"] = $user; #Session ini menggunakan data dari user yang sudah cocok datanya melalui eksekusi diatas
            
            # login sukses, alihkan ke halaman home
            header("Location: index.php");
          }
          #Password atau username lu ga cocok bosh
          else $message = "Invalid Username or Password!";
        }
      #data usernya ga ada bosh
      else $message = "Invalid Username or Password!";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Silivent - Sistem Pencari Lomba dan Event</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body class="bg-dark">
<div class="container mt-5">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Silivent</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="signUp.php">Sign Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="LogIn.php">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Log In</h1>
      </div>
    </div>
    <br><br><br><br><br>
    
    <form action="" method="POST">

    <h2 class="masthead-subheading mb-0">Username : </h2>
    <input type="text" name="username" required>
    <br><br>
    <h2 class="masthead-subheading mb-0">Password : </h2>
    <input type="password" name="password" required>
    <br>
    <a style="font-size:15px; color: black;"><?php echo  $message ?></a>
    <br>
    <input type="submit" name="login" value="Log In" class="btn btn-primary btn-xl rounded-pill mt-5">
  
  </form>

    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
</div>
<br><br>
  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white">Silivent</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

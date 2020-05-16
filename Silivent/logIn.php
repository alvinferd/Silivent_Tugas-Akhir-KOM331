<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme12.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/base.css"/>
    <link rel="stylesheet" href="css/layout.css"/>
    <link rel="stylesheet" href="css/settings.css"/>
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/retina.css"/>
    <link rel="stylesheet" href="css/colorbox.css"/>
    <link rel="stylesheet" href="css/animsition.min.css"/>
</head>
<?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "<body onload=yahhhGagal()>";
      }
    }else{
      echo "<body>";
    }
?>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h1 style="color: white"><a href="index.php">SILIVENT</a></h1>
                        <h7 style="color: white">Sistem Informasi Event & Lomba</h7>
                        <br><br>
                        <div class="page-links">
                            <a href="logIn.php" class="active">Login</a><a href="signUp.php">Sign Up</a>
                        </div>
                        <form action="logInProc.php" method="post">
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button type="submit" name="tambah" value="Log In" class="ibtn">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
  function yahhhGagal() {
    alert("Login Gagal, periksa apakah terdapat data yang salah !");
  }
</script>
</body>
</html>
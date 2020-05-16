<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Silivent - Sistem Pencari Lomba dan Event</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>
  <?php 
  session_start();
  if($_SESSION['stat']!="login"){
    header("location:../logIn.php");
  }
  ?>
  <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Silivent</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hallo, <?php echo $_SESSION['username']; ?>!
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="editKategori.php">Kategori Favorit</a>
          <a class="dropdown-item" href="listLiventDiajukan.php">Lomba/Event Yang Diajukan</a>
          <a class="dropdown-item" href="logOut.php">Log Out</a>
        </div>
    </div>  
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Perbarui Lomba dan Event</h1>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

    <!-- Page Features -->
    <br><br>
    <div style="text-align: center;">

    <?php
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          $query = mysqli_query($koneksi, "select * from event where id = $id");
          $tangkap = mysqli_fetch_array($query);
          echo "<form action='editLiventProc.php?id=".$id."' method='post' enctype='multipart/form-data'>";  
          echo "<h2 class='masthead-subheading mb-0'>Nama Lengkap Anda : </h2>
          <textarea cols='100' rows='1' name='creator' required>".$tangkap['creator']."</textarea>
          <br><br>
          <h2 class='masthead-subheading mb-0'>Nama Institusi : </h2>
          <textarea cols='100' rows='1' name='institusi' required>".$tangkap['institusi']."</textarea>
          <br><br>
          <h2 class='masthead-subheading mb-0'>Nama Lomba/Event : </h2>
          <textarea cols='100' rows='1' name='nama' required>".$tangkap['nama']."</textarea>
          <br><br>
          <h2 class='masthead-subheading mb-0'>Masukkan Gambar Lomba/Event : </h2>
          <input type='file' name='image' required>
          <br><br>
          <h2 class='masthead-subheading mb-0'>Masukkan Deskripsi Singkat (Max 500 Karakter) : </h2>
          <textarea name='shortDesc' rows='5' cols='100' required>".$tangkap['shortDesc']."</textarea>
          <br><br>
          <h2 class='masthead-subheading mb-0'>Masukkan Deskripsi Lengkap : </h2>
          <textarea name='longDesc' rows='50' cols='100' required>".$tangkap['longDesc']."</textarea>
          <br><br>";
        }
      ?>
      <h2 class="masthead-subheading mb-0">Pilih Kategori : </h2>
      <select name="kategori">
            <option value="Statistika">Statistika</option>
            <option value="Geofisika dan Meteorologi">Geofisika dan Meteorologi</option>
            <option value="Biologi">Biologi</option>
            <option value="Kimia">Kimia</option>
            <option value="Informatika">Informatika</option>
            <option value="Fisika">Fisika</option>
            <option value="Biokimia">Biokimia</option>
            <option value="Pertanian">Pertanian</option>
            <option value="Kedokteran">Kedokteran</option>
            <option value="Perikanan dan Perairan">Perikanan dan Perairan</option>
            <option value="Peternakan">Peternakan</option>
            <option value="Kehutanan">Kehutanan</option>
            <option value="Teknologi">Teknologi</option>
            <option value="Matematika">Matematika</option>
            <option value="Ekonomi, Management, dan Bisnis">Ekonomi, Management, dan Bisnis</option>
            <option value="Lainnya">Lainnya</option>                
        </select>
      <br>
      <input type="submit" name="edit" value="Simpan" class="btn btn-primary btn-xl rounded-pill mt-5">
    </form>
    <br>
    <br>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Silivent 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
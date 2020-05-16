<?php include("../config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Silivent - Sistem Informasi Lomba dan Event</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">

</head>

<body>
  <?php 
  session_start();
  if($_SESSION['stat']!="login" OR $_SESSION['admin']!="TRUE"){
    header("location:UMAD.html");
  }
  ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="background: orange;">
    <div class="container">
      <a class="navbar-brand" href="index.php" style="color: black;">Silivent</a>
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

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <?php
          if(isset($_GET['id'])){
            $id = $_GET['id'];

            $query = mysqli_query($koneksi,"SELECT * FROM event WHERE id = $id");
            $tangkap = mysqli_fetch_array($query);
            echo
              "<br><br>
              <h1 class='mt-4'>".$tangkap['nama']."</h1>

              <!-- Author -->
              <p class='lead'>
                Oleh
                ".$tangkap['creator']."
                dari ".$tangkap['institusi']."
              </p>

        <!-- Preview Image -->
        <div style='text-align: center;'>
          <img class='img-fluid rounded' src='../img/".$tangkap['image']."' width='300px' alt=''>
        </div>
        <hr>

        <!-- Post Content -->
        <p class='lead'>Deskripsi Event/Lomba :</p>

        <p class='lead'>".$tangkap['longDesc']."</p>

        <hr>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class='col-md-4'>


        <!-- Side Widget -->
        <br><br><br><br><br><br>
        <div class='card my-4'>
          <h5 class='card-header'>Kategori : ".$tangkap['kategori']."</h5>
        </div>";
      }else{
        die("akses dilarang...");
      }
      ?>    

      </div>

    </div>
    <!-- /.row -->
    <?php
      echo "
      <div style='text-align: center;'>
        <a href='hapusLiventV.php?id=".$tangkap['id']."' class='btn btn-primary btn-xl rounded-pill mt-5'>Hapus</a>
        <a href='verivicationProc.php?id=".$tangkap['id']."' class='btn btn-primary btn-xl rounded-pill mt-5'>Verivikasi</a>
        <br><br>
      </div>";
    ?>

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

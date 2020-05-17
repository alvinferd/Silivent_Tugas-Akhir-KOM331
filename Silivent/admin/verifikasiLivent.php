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
  if($_SESSION['stat']!="login" OR $_SESSION['admin']!="TRUE"){
    header("location:UMAD.html");
  }
  $id = $_SESSION['id'];
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
          <a class="dropdown-item" href="verifikasiLivent.php">Verifikasi Lomba/Event</a>
          <a class="dropdown-item" href="listLiventDiajukan.php">List Lomba/Event Yang Diajukan</a>
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
        <h1 class="masthead-heading mb-0">Verivikasi Lomba/Event</h1>
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

    <table border="1" style="width:100%; table-layout: fixed;">
  <thead>
    <tr>
      <th>Nama Event</th>
      <th>Nama Pengunggah</th>
      <th>Nama Institusi Pengunggah</th>
      <th>Tindakan</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $query = mysqli_query($koneksi, "select * from event where verivied = 0");


    while($tangkap = mysqli_fetch_array($query)){
      echo "<tr>";
      echo "<td>".$tangkap['nama']."</td>";
      echo "<td>".$tangkap['creator']."</td>";
      echo "<td>".$tangkap['institusi']."</td>";
      echo "<td>";
      echo "<a href='hapusLivent.php?id=".$tangkap['id']."'>Hapus</a>";
      echo " / ";
      echo "<a href='detailVeriv.php?id=".$tangkap['id']."'>Lihat</a>";
      echo " / ";
      echo "<a href='verivicationProc.php?id=".$tangkap['id']."'>Verifikasi</a>";
      echo "</td>";

      echo "</tr>";

      }


    ?>

  </tbody>
  </table>
  <br><br>

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
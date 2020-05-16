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
  <link href="../css/one-page-wonder.min.css" rel="stylesheet">

</head>

<?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "berhasil"){
        echo "<body onload=berhasilBerhasilBerhasilHore()>";
      }
    }else{
      echo "<body>";
    }
  ?>

  <!-- cek apakah sudah login -->
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

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Silivent</h1>
        <h2 class="masthead-subheading mb-0">Temukan Lomba dan Event Pilihanmu</h2>
        <a href="list.html" class="btn btn-primary btn-xl rounded-pill mt-5">Lihat Event & Lomba</a>
        <a href="tambahLivent.php" class="btn btn-primary btn-xl rounded-pill mt-5">Tambah Event atau Lomba</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <section>
    <div class="container">
      <br>
      <br>
      <h1 style="text-align: center;">Lomba & Event Pilihan</h1>
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/01.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <a href="#" style="color: black;"><h2 class="display-4">Gemastik XII</h2></a>
            <p>GEMASTIK atau Pagelaran Mahasiswa Nasional Bidang Tekonologi Informasi dan Komunikasi, merupakan program Direktorat Kemahasiswaan, Direktorat Jenderal Pembelajaran dan Kemahasiswaan Kementerian Riset, Teknologi dan Pendidikan Tinggi. Program ini ditujukan untuk meningkatkan kompetensi mahasiswa Indonesia, sehingga mampu mengambil peran sebagai agen perubahan dalam memajukan TIK dan pemanfaatannya, baik ketika masih dalam masa studi maupun kelak sesudah lulus studi.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/02.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <a href="#" style="color: black;"><h2 class="display-4">Bogor Art Festival</h2></a>
            <p>Bogor Art Festival merupakan acara yang diselenggarakan oleh Badan Eksekutif Mahasiswa Fakultas Ekonomi dan Manajemen yang sekarang sudah menginjak tahun ke 9. Bogor Art Festival merupakan rangkaian dari 3 acara utama yaitu FEM Art, Expo dan Malam Puncak. Tiket yang disediakan adalah tiket untuk malam puncak yang akan mengundang sejumlah guest star dan musisi papan atas.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/03.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <a href="#" style="color: black;"><h2 class="display-4">LOGIKA 2020</h2></a>
            <p>Lomba dan Kegiatan Matematika Universitas Indonesia (LOGIKA UI) merupakan rangkaian acara kegiatan Matematika, Statistika, dan Aktuaria yang dilaksanakan oleh Himpunan Mahasiswa Departemen Matematika yang secara rutin diadakan setiap tahunnya sejak tahun 1997. Pada pelaksanaannya yang ke-16 ini, LOGIKA UI 2020 hadir dengan 7 kegiatan utama, yaitu Kompetisi Matematika dan Statistika (MIC, MTC, dan STC), Mathcademy, National Mathematics Paper Competition, LogiTalks, dan Awarding Night. LOGIKA UI 2020 diadakan dengan tujuan utama untuk memberikan kontribusi nyata dalam pengembangan ilmu Matematika, Statistika, dan Aktuaria di Indonesia.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Silivent 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
  function berhasilBerhasilBerhasilHore() {
    alert("Lomba/Event berhasil diajukan");
  }
  </script>

</body>

</html>

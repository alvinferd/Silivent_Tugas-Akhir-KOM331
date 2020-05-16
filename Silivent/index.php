<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Silivent</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS
  ================================================== -->
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/base.css"/>
	<link rel="stylesheet" href="css/skeleton.css"/>
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
	  if($_GET['pesan'] == "berhasil"){
	    echo "<body onload=berhasilBerhasilBerhasilHore()>";
	  }
	} else{
	  echo "<body>";
	}
?>
<body>	
	<!-- MENU
    ================================================== -->	
	
	<div class="header-top">
		<header class="cd-main-header">
			<a class="cd-logo animsition-link" href="index.php">silivent</a>

			<ul class="cd-header-buttons">
				<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
			</ul> <!-- cd-header-buttons -->
		</header>
		
		<nav class="cd-nav">
			<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
				<li>
					<a href="index.php" class="animsition-link">Home</a>
				</li>
				<li>
					<a href="signUp.php" class="animsition-link">Sign Up</a>
				</li>
				<li>
					<a href="logIn.php" class="animsition-link">Log In</a>
				</li>
			</ul> <!-- primary-nav -->
		</nav> <!-- cd-nav -->	
	</div>
	
<main class="cd-main-content">
	
	<!-- HOME SECTION
    ================================================== -->
	
		<section class="section parallax-section parallax-section-padding-top-bottom-pagetop section-page-top-title">
			<div class="parallax-5"></div>
			<div class="fullscreen-title-home">Silivent</div>
			<div class="fullscreen-subtitle-home">Sistem Informasi Event & Lomba</div>
			<div style="text-align: center; margin-top: 5%; margin-bottom: -5%">
				<a href="list.html" class="button-shortcodes text-size-4 text-padding-4 version-2">Lihat Semua Event & Lomba</a>
			</div>
		</section>
		
	<!-- SECTION
    ================================================== -->
		<section class="section" id="scroll-link">
			<div class="call-to-action-2">
				<div class="container">
					<div class="sixteen columns">
						<h6>Rekomendasi Event & Lomba Pilihan</h6>
					</div>
				</div>
			</div>
		</section>	
		
		<div class="container mt-5">
	    <section>
	    <div class="container">
	      <div class="row align-items-center">
	        <div class="col-lg-6 order-lg-2">
	          <div class="p-5">
	            <img class="img-fluid rounded-circle" src="img/01.jpg" alt="">
	          </div>
	        </div>
	        <div class="col-lg-6 order-lg-1">
	          <div class="p-5">
	            <a href="detailgemastik.php" style="color: black;"><h2 class="display-4">Gemastik XII</h2></a>
	            <p style="color:black">GEMASTIK atau Pagelaran Mahasiswa Nasional Bidang Tekonologi Informasi dan Komunikasi, merupakan program Direktorat Kemahasiswaan, Direktorat Jenderal Pembelajaran dan Kemahasiswaan Kementerian Riset, Teknologi dan Pendidikan Tinggi. Program ini ditujukan untuk meningkatkan kompetensi mahasiswa Indonesia, sehingga mampu mengambil peran sebagai agen perubahan dalam memajukan TIK dan pemanfaatannya, baik ketika masih dalam masa studi maupun kelak sesudah lulus studi.</p>
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
	            <p style="color:black">Bogor Art Festival merupakan acara yang diselenggarakan oleh Badan Eksekutif Mahasiswa Fakultas Ekonomi dan Manajemen yang sekarang sudah menginjak tahun ke 9. Bogor Art Festival merupakan rangkaian dari 3 acara utama yaitu FEM Art, Expo dan Malam Puncak. Tiket yang disediakan adalah tiket untuk malam puncak yang akan mengundang sejumlah guest star dan musisi papan atas.</p>
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
	            <p style="color:black">Lomba dan Kegiatan Matematika Universitas Indonesia (LOGIKA UI) merupakan rangkaian acara kegiatan Matematika, Statistika, dan Aktuaria yang dilaksanakan oleh Himpunan Mahasiswa Departemen Matematika yang secara rutin diadakan setiap tahunnya sejak tahun 1997. Pada pelaksanaannya yang ke-16 ini, LOGIKA UI 2020 hadir dengan 7 kegiatan utama, yaitu Kompetisi Matematika dan Statistika (MIC, MTC, dan STC), Mathcademy, National Mathematics Paper Competition, LogiTalks, dan Awarding Night. LOGIKA UI 2020 diadakan dengan tujuan utama untuk memberikan kontribusi nyata dalam pengembangan ilmu Matematika, Statistika, dan Aktuaria di Indonesia.</p>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
</main>	

	<!-- FOOTER
    ================================================== -->	
		<section class="section footer-bottom">	
			<div class="container">
				<div class="sixteen columns">
					<h6><i class="icon-footer">&#xf09b;</i><a href="https://github.com/alvinferd/Pululululu" style="color: white">GitHub</a></h6>
					<p>© ALL RIGHTS RESERVED. MADE BY PULULULULU PROJECT</p>
				</div>	
			</div>
		</section>
	

	<div class="scroll-to-top">&#xf106;</div>
	</div>
	
	
		
	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<script type="text/javascript" src="js/jquery.mobile.custom.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>		
<script type="text/javascript" src="js/jquery.animsition.min.js"></script>
<script type="text/javascript">
(function($) { "use strict";
	$(document).ready(function() {
	  
	  $(".animsition").animsition({
	  
		inClass               :   'zoom-in-sm',
		outClass              :   'zoom-out-sm',
		inDuration            :    1500,
		outDuration           :    800,
		linkElement           :   '.animsition-link', 
		loading               :    true,
		loadingParentElement  :   'body', 
		loadingClass          :   'animsition-loading',
		unSupportCss          : [ 'animation-duration',
								  '-webkit-animation-duration',
								  '-o-animation-duration'
								],
		overlay               :   false,
		overlayClass          :   'animsition-overlay-slide',
		overlayParentElement  :   'body'
	  });
	});  
})(jQuery);
</script>
<script type="text/javascript" src="js/jquery.easing.js"></script>	
<script type="text/javascript" src="js/jquery.hidescroll.min.js"></script>	
<script type="text/javascript">
	$('.header-top').hidescroll();
</script>
<script type="text/javascript" src="js/smoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script> 
<script type="text/javascript" src="js/masonry.js"></script> 
<script type="text/javascript" src="js/isotope.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/scrollReveal.js"></script>
<script type="text/javascript">
(function($) { "use strict";
      window.scrollReveal = new scrollReveal();
})(jQuery);
</script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript"> 
(function($) { "use strict";          
			jQuery(document).ready(function() {
				var offset = 450;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.scroll-to-top').fadeIn(duration);
					} else {
						jQuery('.scroll-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.scroll-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
				})
			});
})(jQuery);
</script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/styleswitcher.js"></script>
<script type="text/javascript" src="js/custom-ajax-home.js"></script>  
<script>
  function berhasilBerhasilBerhasilHore() {
    alert("Berhasil Membuat Akun!");
  }
</script>	  
<!-- End Document
================================================== -->
</body>
</html>
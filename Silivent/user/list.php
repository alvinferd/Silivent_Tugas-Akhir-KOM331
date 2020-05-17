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
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="../css/base.css"/>
	<link rel="stylesheet" href="../css/skeleton.css"/>
	<link rel="stylesheet" href="../css/layout.css"/>
	<link rel="stylesheet" href="../css/settings.css"/>
	<link rel="stylesheet" href="../css/font-awesome.css" />
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/retina.css"/>
	<link rel="stylesheet" href="../css/colorbox.css"/>
	<link rel="stylesheet" href="../css/animsition.min.css"/>
	
	<link rel="alternate stylesheet" type="text/css" href="../css/colors/color-gold.css" title="1">
    <link rel="alternate stylesheet" type="text/css" href="../css/colors/color-2.css" title="2">
    <link rel="alternate stylesheet" type="text/css" href="../css/colors/color-3.css" title="3">
    <link rel="alternate stylesheet" type="text/css" href="../css/colors/color-4.css" title="4">
    <link rel="alternate stylesheet" type="text/css" href="../css/colors/color-5.css" title="5">	
    <link rel="alternate stylesheet" type="text/css" href="../css/colors/color-6.css" title="6">	
    <link rel="alternate stylesheet" type="text/css" href="../css/colors/color-7.css" title="7">
	
	
	
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
<!-- cek apakah sudah login -->
  <?php 
  session_start();
  if($_SESSION['stat']!="login"){
    header("location:../logIn.php");
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
			  <li class="has-children">
				<a href="#">Halo, <?php echo $_SESSION['username']; ?>!</a>
				<ul class="cd-secondary-nav is-hidden">
				<li><a href="profile.php">Profil</a></li>
              	<li><a href="tambahLivent.php">Submit Event</a></li>
              	<li><a href="listLiventDiajukan.php">Event Saya</a></li>
              	<li><a href="logOut.php">Log Out</a></li>
				</ul>
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
		        <a href="index.php" class="button-shortcodes text-size-4 text-padding-4 version-2">Home</a>
		    </div>
		</section>

	<!-- SECTION
    ================================================== -->	
			<section class="section" id="scroll-link">
			<div class="call-to-action-2">
				<div class="container">
					<div class="sixteen columns">
						<h6>List Lomba</h6>
					</div>
				</div>
			</div>
		</section>
		
	<!-- FILTER -->
		<section style="padding-top: 20px; padding-bottom: 20px">
			<div class="container">
				<div class="sixteen columns">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current" data-filter="*" title="">Show All</a></li>
							<li><a href="#" data-filter=".KTI" title="">KTI</a></li>
							<li><a href="#" data-filter=".Fotografi" title="">Fotografi</a></li>
							<li><a href="#" data-filter=".Debat" title="">Debat</a></li>
							<li><a href="#" data-filter=".Informatika" title="">IT</a></li>
							<li><a href="#" data-filter=".Seni" title="">Seni</a></li>
							<li><a href="#" data-filter=".Olahraga" title="">Olahraga</a></li>
							<li><a href="#" data-filter=".E-Sport" title="">E-Sport</a></li>
							<li><a href="#" data-filter=".Lainnya" title="">Lainnya</a></li>
						</ul>
					</div>
				</div>
			</div>
	<!---------->
			<div class="clear"></div>		
			<div class="blog-wrapper">
				<div id="blog-grid-masonry">
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-3 Informatika">
							<div class="blog-box-1 grey-section">
								<img src="images/blog/1.jpg"  alt="">
								<h6>Latest post</h6>
								<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
								<div class="link">&#xf178;</div>
							</div>
						</div>
					</a>
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-3 Seni">
							<div class="blog-box-1 grey-section">
								<img src="images/blog/1.jpg"  alt="">
								<h6>Latest post</h6>
								<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
								<div class="link">&#xf178;</div>
							</div>
						</div>
					</a>
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-3 Informatika">
							<div class="blog-box-1 grey-section">
								<img src="images/blog/1.jpg"  alt="">
								<h6>Latest post</h6>
								<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
								<div class="link">&#xf178;</div>
							</div>
						</div>
					</a>
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-3 Informatika">
							<div class="blog-box-1 grey-section">
								<img src="images/blog/1.jpg"  alt="">
								<h6>Latest post</h6>
								<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
								<div class="link">&#xf178;</div>
							</div>
						</div>
					</a>
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-3 Informatika">
							<div class="blog-box-1 grey-section">
								<img src="images/blog/1.jpg"  alt="">
								<h6>Latest post</h6>
								<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
								<div class="link">&#xf178;</div>
							</div>
						</div>
					</a>
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-3 Informatika">
							<div class="blog-box-1 grey-section">
								<img src="images/blog/1.jpg"  alt="">
								<h6>Latest post</h6>
								<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
								<div class="link">&#xf178;</div>
							</div>
						</div>
					</a>
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-3 Informatika">
							<div class="blog-box-1 grey-section">
								<img src="images/blog/1.jpg"  alt="">
								<h6>Latest post</h6>
								<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
								<div class="link">&#xf178;</div>
							</div>
						</div>
					</a>
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-3 Informatika">
							<div class="blog-box-1 grey-section">
								<img src="images/blog/1.jpg"  alt="">
								<h6>Latest post</h6>
								<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
								<div class="link">&#xf178;</div>
							</div>
						</div>
					</a>
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-3 Informatika">
							<div class="blog-box-1 grey-section">
								<img src="images/blog/1.jpg"  alt="">
								<h6>Latest post</h6>
								<p>Lorem ipsum dolor sit consectetur amet, adipisicing elit.</p>
								<div class="link">&#xf178;</div>
							</div>
						</div>
					</a>
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
<script type="text/javascript" src="../js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="../js/modernizr.custom.js"></script> 
<script type="text/javascript" src="../js/jquery.mobile.custom.min.js"></script>
<script type="text/javascript" src="../js/retina-1.1.0.min.js"></script>		
<script type="text/javascript" src="../js/jquery.animsition.min.js"></script>
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
<script type="text/javascript" src="../js/jquery.easing.js"></script>	
<script type="text/javascript" src="../js/jquery.hidescroll.min.js"></script>	
<script type="text/javascript">
	$('.header-top').hidescroll();
</script>
<script type="text/javascript" src="../js/smoothScroll.js"></script>
<script type="text/javascript" src="../js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="../js/imagesloaded.pkgd.min.js"></script> 
<script type="text/javascript" src="../js/masonry.js"></script> 
<script type="text/javascript" src="../js/isotope.js"></script> 
<script type="text/javascript" src="../js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="../js/waypoints.min.js"></script>
<script type="text/javascript" src="../js/scrollReveal.js"></script>
<script type="text/javascript">
(function($) { "use strict";
      window.scrollReveal = new scrollReveal();
})(jQuery);
</script>
<script type="text/javascript" src="../js/owl.carousel.min.js"></script>
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
<script type="text/javascript" src="../js/jquery.fitvids.js"></script>
<script type="text/javascript" src="../js/styleswitcher.js"></script>
<script type="text/javascript" src="../js/custom-ajax-home.js"></script> 
<script type="text/javascript" src="js/custom-blog-home-1.js"></script>  
<script>
  function berhasilBerhasilBerhasilHore() {
    alert("Berhasil Membuat Akun!");
  }
</script>	  
<!-- End Document
================================================== -->
</body>
</html>
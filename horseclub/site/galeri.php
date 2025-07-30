<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Galeri</title>
	<link rel="icon" href="logoicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/uCarousel.js"></script>
	<script src="js/tms-0.4.1.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <!--     <script src="js/Kozuka_L_300.font.js"></script> 
    <script src="js/Kozuka_B_700.font.js"></script> --->
    <script>
		$(document).ready(function(){
		  $('.gallery')._TMS({
			  show:0,
			  pauseOnHover:true,
			  prevBu:false,
			  nextBu:false,
			  playBu:false,
			  duration:700,
			  preset:'fade',
			  pagination:$('.img-pags').uCarousel({show:3,shift:0, rows:4}),
			  pagNums:false,
			  slideshow:7000,
			  numStatus:true,
			  banners:false,
			  waitBannerAnimation:false,
			  progressBar:false
		   })		
		 })
	  </script>
	
</head>
<body>
  <!--==============================header=================================-->
    <header>
    	<div class="main">
        	<h1><a href="anasayfa.php"><img src="images/logo.png" alt=""></a></h1>
            
            <div class="clear"></div>
        </div>
    </header>  
    <nav>  
        <ul class="menu">
            <li><a href="anasayfa.php">Anasayfa</a></li>
            <li><a href="atlar.php">Atlar</a></li>
            <li><a href="alimsatim.php">İlanlar</a></li>
            <li><a href="etkinlikler.php">Etkinlikler</a></li>
			<li><a href="bakimbeslenme.php">Bakım ve Beslenme</a></li>
            <li class="current"><a href="galeri.php">Galeri</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
			<li><a href="index.php"><font color="#616969"> Çıkış Yap</font></a>
        </ul>
        <div class="clear"></div>
     </nav>
     <div id="slide">		
        <div class="gallery">
            <ul class="items">
                <li><img src="images/gallery-6-big.jpg" alt=""></li>
                <li><img src="images/gallery-2-big.jpg" alt=""></li>
                <li><img src="images/gallery-3-big.jpg" alt=""></li>
                <li><img src="images/gallery-4-big.jpg" alt=""></li>
                <li><img src="images/gallery-5-big.jpg" alt=""></li>
                <li><img src="images/gallery-1-big.jpg" alt=""></li>
                <li><img src="images/gallery-7-big.jpg" alt=""></li>
                <li><img src="images/gallery-8-big.jpg" alt=""></li>
                <li><img src="images/gallery-9-big.jpg" alt=""></li>
                <li><img src="images/gallery-10-big.jpg" alt=""></li>
                <li><img src="images/gallery-11-big.jpg" alt=""></li>
                <li><img src="images/gallery-12-big.jpg" alt=""></li>
            </ul>
        </div>
     </div> 
  <!--==============================content================================-->
    <section id="content">
       <div class="container_12 top-1">
        <div class="grid_12">
        	<div class="pag">
                 <div class="img-pags">
                    <ul>
                      <li><a href="#"><span><img src="images/gallery-6.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-2.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-3.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-4.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-5.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-1.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-7.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-8.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-9.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-10.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-11.jpg" alt=""></span></a></li>
                      <li><a href="#"><span><img src="images/gallery-12.jpg" alt=""></span></a></li>
                    </ul>
                </div>
            </div>  
        </div>
        <div class="clear"></div>
       </div>
    </section> 
     
<script>
	Cufon.now();
</script>
</body>
</html>
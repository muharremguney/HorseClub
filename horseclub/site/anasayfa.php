<?php include 'baglan.php';
session_start();
if (!isset($_SESSION["user"])) { header("Location: index.php"); exit; }?>


<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="UTF-8">
    <title>Anasayfa</title>
	<link rel="icon" href="logoicon.png" type="image/x-icon" />
   
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
 <!--     <script src="js/Kozuka_L_300.font.js"></script> 
    <script src="js/Kozuka_B_700.font.js"></script> --->
    <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:10000,
				preset:'zoomer',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:'fade',
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
	
</head>
<body>
  <!--==============================header=================================-->
    <header>
	
    	<div class="main">
        	<h1><a href="anasayfa.php"><img src="images/logo.png" alt=""></a></h1>
			<br>
		    <a href="profil.php" style="float:right">  <font color="#dc6c58"> <font color="#ffffff"> Hoşgeldin </font> <?php echo $_SESSION["user"]; ?></font> </a> 
			<br>
			
			
            
            <div class="clear"></div>
        </div>
		
    </header>  
	
    <nav>  
	
        <ul class="menu">
            <li class="current"><a href="anasayfa.php">Anasayfa</a></li>
            <li><a href="atlar.php">Atlar</a></li>
            <li><a href="alimsatim.php">İlanlar</a></li>
            <li><a href="etkinlikler.php">Etkinlikler</a></li>
			<li><a href="bakimbeslenme.php">Bakım ve Beslenme</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
			<li><a href="giris.php"><font color="#616969"> Çıkış Yap</font></a>
			
			
			
        </ul>
		
        <div class="clear"></div>
		
     </nav>
     <div id="slide">		
        <div class="slider">
            <ul class="items">
                <li><img src="images/slider-1.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>AT BAKIMI NASIL OLMALI?</strong><span>At bakımında ve beslenmesinde dikkat etmeniz gerekenler ! </span></p><a href="bakimbeslenme.php">Daha Fazla</a></div></li>
				<li><img src="images/slider-3.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>SİZ DE ATINIZI İLANA VERİN</strong><span>Diğer kullanıcıların ilanınızı görmesini sağlayın!</span></p><a href="atekle.php">Daha Fazla</a></div></li>
                <li><img src="images/slider-2.jpg" alt="" /><div class="banner"><p class="extra-wrap"><strong>YARIŞLAR HAKKINDA BİLGİ EDİNİN </strong><span>Düzenlen son yarışlar hakkında merak edilenler!</span></p><a href="yarislar2.php">Daha Fazla</a></div></li>
                
            </ul>
        </div>	
        <a href="#" class="prev"></a><a href="#" class="next"></a>
     </div> 
  <!--==============================content================================-->
    <section id="content">
       <div class="container_12 top-1">
       	<div class="grid_4 box-1">
        	<img src="images/page1-img1.jpg" alt="">
            <a href="atlar.php"><span class="clr-1">ATLAR</span></a>
        </div>
        <div class="grid_4 box-1">
        	<img src="images/page1-img2.jpg" alt="">
            <a href="alimsatim"><span class="clr-1">İLANLAR</span> </a>
        </div>
        <div class="grid_4 box-1">
        	<img src="images/page1-img3.jpg" alt="">
            <a href="etkinlikler.php"><span class="clr-1">ETKİNLİKLER</span></a>
        </div>
        <div class="grid_12">
        	<div class="line pad-1"></div>
        </div>
        <div class="grid_4">
        	<h2 class="p2">Merhaba <font color="#dc6c58"> <?php echo $_SESSION["user"]; ?> </font></h2>
            <img src="images/beslenme3" alt="">
            <p class="text-1 top-2 p3">Atların Nasıl Beslenmesi Gerektiğini Biliyor Musun ?</p>
            <p>Bir at, günlük olarak vücut ağırlığının % 1’inden fazla saman yiyebilir. Eğer sadece...</p>
            <a href="beslenme.php" class="button top-3">Daha Fazla</a>
        </div>
        <div class="grid_4">
        	<div class="left-1">
                <h2 class="p4">Irklar</h2>
                <div class="wrap">
                    <div class="number">1</div>
                    <p class="extra-wrap border-bot-1"><span class="clr-1">Arap Atı</span><br>
    Zekâsı, sadakati ve dayanıklılığı ile bilinen bir at cinsidir. Kökeni İlk Çağ'a kadar dayanır. Genellikle Türkçede "Küheylan" olarak adlandırılır<a class="link" href="arapati.php" target="_blank"> daha fazla...</a> </p>
                </div>
                <div class="wrap">
                    <div class="number">2</div>
                    <p class="extra-wrap border-bot-1"><span class="clr-1">Thoroughbred</span><br>
    En çok at yarışlarında yer almalarıyla bilinen bir at ırkıdır. Thoroughbred cinsi atlar, çeviklikleri, hızları ve ruhları ile tanınan "sıcakkanlı" atlar olarak kabul edilir<a class="link" href="thoroughbred.php" target="_blank"> daha fazla...</a></p>
                </div>
                
            </div>
        </div> 
        <div class="grid_4">
        	<div class="left-2">
                <h2 class="p4">Son Etkinlikler</h2>
                <div class="wrap border-bot-1">
                    <img src="images/page1-img5.jpg" alt="" class="img-indent">
                    <p class="extra-wrap"><span class="clr-1">Öğrencilerine Biniclik Eğitimi</span><br> Etkinlik Tarihi</p>
    <a href="etkinlikler.php" class="link">10.06.2023</a>
                </div>
                <div class="wrap border-bot-1">
                    <img src="images/page1-img6.jpg" alt="" class="img-indent">
                    <p class="extra-wrap"><span class="clr-1">Yarışlarda TBMM Koşusu </span><br> Etkinlik Tarihi</p>
    <a href="etkinlikler.php" class="link">17.06.2023</a>
                </div>
				<div class="wrap border-bot-1">
                    <img src="images/etkinlik" alt="" class="img-indent">
                    <p class="extra-wrap"><span class="clr-1">Binicilik Tutkunları  Buluşuyor</span><br> Etkinlik Tarihi</p>
    <a href="etkinlikler.php" class="link">02.07.2023</a>
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
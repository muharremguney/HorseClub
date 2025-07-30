<!DOCTYPE html>
<html lang="tr">
<head>
    <title>İletişim</title>
	<link rel="icon" href="logoicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
	<script src="js/tms-0.4.1.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
	
    <!--     <script src="js/Kozuka_L_300.font.js"></script> 
    <script src="js/Kozuka_B_700.font.js"></script> --->
	
	
	<!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
	
	
</head>
<body style="background-color:black">
  <!--==============================header=================================-->
    <header>
    	<div class="main">
        	<h1><a href="anasayfa.php"><img src="images/logo.png" alt=""></a></h1>
                    
        </div>
    </header>  
    <nav>  
        <ul class="menu">
            <li><a href="anasayfa.php">Anasayfa</a></li>
            <li><a href="atlar.php">Atlar</a></li>
            <li><a href="alimsatim.php">İlanlar</a></li>
            <li><a href="etkinlikler.php">Etkinlikler</a></li>
			<li><a href="bakimbeslenme.php">Bakım ve Beslenme</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li class="current"><a href="iletisim.php">İletişim</a></li>
			<li><a href="index.php"><font color="#616969"> Çıkış Yap</font></a>
        </ul>
        <div class="clear"></div>
     </nav>
  <!--==============================content================================-->
    <section id="content">
       <div class="container_12 top-4">
        <div class="grid_4">
        	<h2>İletişim</h2>
            <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3122.007107255957!2d27.21980817602766!3d38.51054697180932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b97c34ef6c1585%3A0xc872c1f641b1a653!2zUmXDp2luZSBBdCDDh2lmdGxpxJ9p!5e0!3m2!1str!2str!4v1681837585739!5m2!1str!2str"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <dl class="adr">
               
                <dd><span>Telefon: </span>0555 555 5555<div class=""></div></dd>
                <dd><span>E-mail: </span><a href="#" class="link">yelda@gmail.com</a></dd>
            </dl> 
        </div>
		<div class="row justify-content-md-center">
		 
        <div class="grid_8">
        	<div class="left-1">
            	<h3>Bizimle İletişime Geçin</h3>
				<br>
                <form action="islem.php" method="POST" >
                  
                    <strong>İsim:</strong> <input type="text" name="iletisim_isim" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["iletisim_isim"].'"' ?> class="form-control form-control" required="">
                    <strong>Email:</strong><input type="email" name="iletisim_mail" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["iletisim_mail"].'"' ?> class="form-control form-control-user" required="">
                   <strong>Telefon:</strong><input type="tel" pattern="[0-9]{11}"- name="iletisim_telefon" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["iletisim_telefon"].'"' ?> class="form-control form-control-user" required="">
                    <strong>Mesaj:</strong><textarea type="text" name="iletisim_ileti" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["iletisim_ileti"].'"' ?> class="form-control form-control-user" required=""></textarea>
                    <br>
					<p align="right">
					<input type="submit"  name="iletisim-ekle" class="btn btn-danger btn-user " value="Gönder" >
					<input type="reset"  class="btn btn-secondary btn-user  " value="Temizle" >
					</p>
					
                  
				  
                </form> 
				
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
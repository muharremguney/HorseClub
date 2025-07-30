<!DOCTYPE html>
<?php
include 'baglan.php';
require 'config.php';
session_start();
$userids = $_SESSION["userid"];
$icerikler = DB::get("SELECT * 
FROM icerikler, user, at_cinsiyet
WHERE icerikler.user_id = user.user_id AND icerikler.satilik_cinsiyet = at_cinsiyet.satilik_cinsiyet AND icerikler.user_id = $userids");


?>
<html lang="tr">
<head>

    <title>Profilim</title>
	<link rel="icon" href="logoicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--     <script src="js/Kozuka_L_300.font.js"></script> 
    <script src="js/Kozuka_B_700.font.js"></script> --->
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
            <li ><a href="atlar.php">Atlar</a></li>
            <li><a href="alimsatim.php">İlanlar</a></li>
            <li><a href="etkinlikler.php">Etkinlikler</a></li>
			<li><a href="bakimbeslenme.php">Bakım ve Beslenme</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
			<li><a href="index.php"><font color="#616969"> Çıkış Yap</font></a>
        </ul>
        <div class="clear"></div>
     </nav>
  <!--==============================content================================-->
    <section id="content">
       
       

          <ul class="list-2">
              <li><a href="profil.php"> <font color="#dc6c58"> <b>İlanlarım </b></font></a></li>
              
			
			  
          </ul>
		
		
               
        
                   
				   <main class="login-form">
        <div class="container">
					
            <div class="row">
			
                <?php foreach ($icerikler as $k => $v) : ?>
                    <?php
                    $resim = PATH . "images/$v->resim";
                    ?>
                    <div class="col-md-4">
                        <div class="card" style="background-color:#616969">
                            <img class="card-img-top" src="<?php echo $resim ?>" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><font color="#ffffff"><?php echo $v->satilik_ad ?></font></h4>
								<p><font color="#ffffff">Sahibi  :  </font> <font color="#EF6F53"> <?php echo $v->adi ?> <?php echo $v->soyadi?> </font>  </p>
					            <p><font color="#ffffff">Mail  :  </font> <font color="#EF6F53"> <?php echo $v->mails ?> </font>  </p>
                                <p><font color="#ffffff">Irkı  :  </font><font color="#EF6F53"> <?php echo $v->satilik_irk ?> </font>  </p>
					            <p><font color="#ffffff">Tipi  :  </font> <font color="#EF6F53"><?php echo $v->satilik_tip ?></font> </p>
					            <p><font color="#ffffff">Yaş  :  </font> <font color="#EF6F53"><?php echo $v->satilik_yas ?> </font></p>
					            <p><font color="#ffffff">Cinsiyet :  </font> <font color="#EF6F53"><?php echo $v->cinsiyet_ad ?> </font></p>
					            <p><font color="#ffffff">Anne  :  </font> <font color="#EF6F53"><?php echo $v->satilik_anne ?></font></p>
                                <p><font color="#ffffff">Baba  :  </font> <font color="#EF6F53"><?php echo $v->satilik_baba ?> </font></p>
								<p><font color="#ffffff">Fiyat  :  </font> <font color="#EF6F53"><?php echo $v->fiyat ?> TL</font></p>
								<p><font color="#ffffff">İlan Durumu  :  </font> <font color="#EF6F53"><?php echo $v->durum ?></font></p> 
								
								<center>
								
								
								<a href="ilansil.php?id=<?php echo $v->id ?>" class="btn btn-sm btn-danger">İlanı Sil</a>
								<a href="ilanguncelle.php?id=<?php echo $v->id ?>" class="btn btn-sm btn-success">Satıldı</a>
                                								
								</center>
								
                              
							  
                            </div>
							
                        </div>
						<br>
                    </div>
					
                <?php endforeach; ?>
				
				
            </div>
			<div id="header" onclick="location.href='atekle.php';" style="cursor:pointer;"> 
		<div class="alert alert-success" style="background-color:#ffffff" >
                          <center> <b><font color="#EF6F53">İLAN VERMEK İÇİN TIKLAYIN</font></b></center>
                        </div>
		</div>	
        </div>
    </main>



				   
				</div>
            </div>
        </div>       
        <div class="clear"></div>
       
    </section> 
       
<script>
	Cufon.now();
</script>
</body>
</html>
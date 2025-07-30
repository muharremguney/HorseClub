<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Yarışlar</title>
	<link rel="icon" href="logoicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
   <!--     <script src="js/Kozuka_L_300.font.js"></script> 
    <script src="js/Kozuka_B_700.font.js"></script> --->
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
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
			<li><a href="index.php"><font color="#616969"> Çıkış Yap</font></a>
        </ul>
        <div class="clear"></div>
     </nav>
  <!--==============================content================================-->
<?php include 'baglan.php'; ?>
<div class="card-body">
<form action="islem.php" method="POST">

<center> <h3>1. Koşu </h3><h4> (2 Yaşlı İngilizler - 57 kg - 1000 Çim) </h4>  </center>

				
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="%100" cellspacing="0">
                  <thead>
                    <tr>

                      <th> <font color="#dc6c58"> S </font></th>

                      <th><font color="#dc6c58"> At İsmi</font></th>
					  
					  <th><font color="#dc6c58"> Yaş</font></th>

                      <th><font color="#dc6c58"> Orijin Anne </font></th>

                      <th><font color="#dc6c58"> Orijin Baba</font></th>
                          
                      <th><font color="#dc6c58"> Sıklet</font></th>
					  
					  <th><font color="#dc6c58"> Jokey</font></th>

                      <th><font color="#dc6c58"> Sahip</font></th>
					  
					  <th><font color="#dc6c58"> Antrenörü</font></th>

                      <th><font color="#dc6c58"> Derece</font></th>

                      <th><font color="#dc6c58"> Gny</font></th>
                          
                      <th><font color="#dc6c58"> AGF</font></th>
					  
					  <th><font color="#dc6c58"> St</font></th>

                      <th><font color="#dc6c58"> Fark</font></th>
                          
                      <th><font color="#dc6c58"> HP</font></th>
					  
                    </tr>
                  </thead>

                  <tbody>

                    <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT * FROM yarislar0"); while($oku = mysqli_fetch_array($sorgu)){ ?>


                      <td><?php echo $oku['at_id']; ?></td>

                      <td><?php echo $oku['at_ismi']; ?></td>
					  
					  <td><?php echo $oku['at_yas'];  ?></td>

                      <td><?php echo $oku['orjin_anne']; ?></td>

                      <td><?php echo $oku['orjin_baba']; ?></td>
					  
					  <td><?php echo $oku['at_kilo']; ?></td>
					  
					  <td><?php echo $oku['jokey_ad']; ?></td>

                      <td><?php echo $oku['sahip_ad']; ?></td>
					  
					  <td><?php echo $oku['antrenör_ad'];  ?></td>

                      <td><?php echo $oku['at_derece']; ?></td>

                      <td><?php echo $oku['at_gny']; ?></td>
					  
					  <td><?php echo $oku['at_agf']; ?></td>
					  
					  <td><?php echo $oku['at_st']; ?></td>

                      <td><?php echo $oku['at_fark']; ?></td>
					  
					  <td><?php echo $oku['at_hp']; ?></td>
					  
                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>
		  
		  
		  
		  
		  
		  
		  
		  
		  <div class="card-body">
<form action="islem.php" method="POST">
<center> <h3>2. Koşu </h3><h4> (4 ve Yukarı İngilizler - 58 kg - 58.50 kg - 1200 Çim) </h4>  </center>
				
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="%100" cellspacing="0">
                  <thead>
                    <tr>

                      <th> <font color="#dc6c58"> S </font></th>

                      <th><font color="#dc6c58"> At İsmi</font></th>
					  
					  <th><font color="#dc6c58"> Yaş</font></th>

                      <th><font color="#dc6c58"> Orijin Anne </font></th>

                      <th><font color="#dc6c58"> Orijin Baba</font></th>
                          
                      <th><font color="#dc6c58"> Sıklet</font></th>
					  
					  <th><font color="#dc6c58"> Jokey</font></th>

                      <th><font color="#dc6c58"> Sahip</font></th>
					  
					  <th><font color="#dc6c58"> Antrenörü</font></th>

                      <th><font color="#dc6c58"> Derece</font></th>

                      <th><font color="#dc6c58"> Gny</font></th>
                          
                      <th><font color="#dc6c58"> AGF</font></th>
					  
					  <th><font color="#dc6c58"> St</font></th>

                      <th><font color="#dc6c58"> Fark</font></th>
                          
                      <th><font color="#dc6c58"> HP</font></th>

                    </tr>
                  </thead>
                 
				 <tbody>
                    <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT * FROM yarislar2"); while($oku = mysqli_fetch_array($sorgu)){ ?>

                      <td><?php echo $oku['at_id']; ?></td>

                      <td><?php echo $oku['at_ismi']; ?></td>
					  
					  <td><?php echo $oku['at_yas'];  ?></td>

                      <td><?php echo $oku['orjin_anne']; ?></td>

                      <td><?php echo $oku['orjin_baba']; ?></td>
					  
					  <td><?php echo $oku['at_kilo']; ?></td>
					  
					  <td><?php echo $oku['jokey_ad']; ?></td>

                      <td><?php echo $oku['sahip_ad']; ?></td>
					  
					  <td><?php echo $oku['antrenör_ad'];  ?></td>

                      <td><?php echo $oku['at_derece']; ?></td>

                      <td><?php echo $oku['at_gny']; ?></td>
					  
					  <td><?php echo $oku['at_agf']; ?></td>
					  
					  <td><?php echo $oku['at_st']; ?></td>

                      <td><?php echo $oku['at_fark']; ?></td>
					  
					  <td><?php echo $oku['at_hp']; ?></td>
					  
                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>
		  
		  
		  
		  
		  
		  
		  		  <div class="card-body">
<form action="islem.php" method="POST">
<center> <h3>3. Koşu </h3><h4> (4 ve Yukarı Araplar - 58 kg - 60 kg - 1900 Kum) </h4>  </center>
				
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="%100" cellspacing="0">
                  <thead>
                    <tr>

                      <th> <font color="#dc6c58"> S </font></th>

                      <th><font color="#dc6c58"> At İsmi</font></th>
					  
					  <th><font color="#dc6c58"> Yaş</font></th>

                      <th><font color="#dc6c58"> Orijin Anne </font></th>

                      <th><font color="#dc6c58"> Orijin Baba</font></th>
                          
                      <th><font color="#dc6c58"> Sıklet</font></th>
					  
					  <th><font color="#dc6c58"> Jokey</font></th>

                      <th><font color="#dc6c58"> Sahip</font></th>
					  
					  <th><font color="#dc6c58"> Antrenörü</font></th>

                      <th><font color="#dc6c58"> Derece</font></th>

                      <th><font color="#dc6c58"> Gny</font></th>
                          
                      <th><font color="#dc6c58"> AGF</font></th>
					  
					  <th><font color="#dc6c58"> St</font></th>

                      <th><font color="#dc6c58"> Fark</font></th>
                          
                      <th><font color="#dc6c58"> HP</font></th>

                    </tr>
                  </thead>
                 
				 <tbody>
                    <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT * FROM yarislar3"); while($oku = mysqli_fetch_array($sorgu)){ ?>

                      <td><?php echo $oku['at_id']; ?></td>

                      <td><?php echo $oku['at_ismi']; ?></td>
					  
					  <td><?php echo $oku['at_yas'];  ?></td>

                      <td><?php echo $oku['orjin_anne']; ?></td>

                      <td><?php echo $oku['orjin_baba']; ?></td>
					  
					  <td><?php echo $oku['at_kilo']; ?></td>
					  
					  <td><?php echo $oku['jokey_ad']; ?></td>

                      <td><?php echo $oku['sahip_ad']; ?></td>
					  
					  <td><?php echo $oku['antrenör_ad'];  ?></td>

                      <td><?php echo $oku['at_derece']; ?></td>

                      <td><?php echo $oku['at_gny']; ?></td>
					  
					  <td><?php echo $oku['at_agf']; ?></td>
					  
					  <td><?php echo $oku['at_st']; ?></td>

                      <td><?php echo $oku['at_fark']; ?></td>
					  
					  <td><?php echo $oku['at_hp']; ?></td>
					  
                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>
		  
		  
		  
		  
		  
		  
		   <div class="card-body">
<form action="islem.php" method="POST">
<center> <h3>4. Koşu </h3><h4> (4 ve Yukarı İngilizler - 1300 Çim) </h4>  </center>
				
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="%100" cellspacing="0">
                  <thead>
                    <tr>

                      <th> <font color="#dc6c58"> S </font></th>

                      <th><font color="#dc6c58"> At İsmi</font></th>
					  
					  <th><font color="#dc6c58"> Yaş</font></th>

                      <th><font color="#dc6c58"> Orijin Anne </font></th>

                      <th><font color="#dc6c58"> Orijin Baba</font></th>
                          
                      <th><font color="#dc6c58"> Sıklet</font></th>
					  
					  <th><font color="#dc6c58"> Jokey</font></th>

                      <th><font color="#dc6c58"> Sahip</font></th>
					  
					  <th><font color="#dc6c58"> Antrenörü</font></th>

                      <th><font color="#dc6c58"> Derece</font></th>

                      <th><font color="#dc6c58"> Gny</font></th>
                          
                      <th><font color="#dc6c58"> AGF</font></th>
					  
					  <th><font color="#dc6c58"> St</font></th>

                      <th><font color="#dc6c58"> Fark</font></th>
                          
                      <th><font color="#dc6c58"> HP</font></th>

                    </tr>
                  </thead>
                 
				 <tbody>
                    <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT * FROM yarislar4"); while($oku = mysqli_fetch_array($sorgu)){ ?>

                      <td><?php echo $oku['at_id']; ?></td>

                      <td><?php echo $oku['at_ismi']; ?></td>
					  
					  <td><?php echo $oku['at_yas'];  ?></td>

                      <td><?php echo $oku['orjin_anne']; ?></td>

                      <td><?php echo $oku['orjin_baba']; ?></td>
					  
					  <td><?php echo $oku['at_kilo']; ?></td>
					  
					  <td><?php echo $oku['jokey_ad']; ?></td>

                      <td><?php echo $oku['sahip_ad']; ?></td>
					  
					  <td><?php echo $oku['antrenör_ad'];  ?></td>

                      <td><?php echo $oku['at_derece']; ?></td>

                      <td><?php echo $oku['at_gny']; ?></td>
					  
					  <td><?php echo $oku['at_agf']; ?></td>
					  
					  <td><?php echo $oku['at_st']; ?></td>

                      <td><?php echo $oku['at_fark']; ?></td>
					  
					  <td><?php echo $oku['at_hp']; ?></td>
					  
                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>
		  
		  
		  
		  		   <div class="card-body">
<form action="islem.php" method="POST">
<center> <h3>5. Koşu </h3><h4> (4 Yaşlı Araplar - 2000 Çim) </h4>  </center>
				
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="%100" cellspacing="0">
                  <thead>
                    <tr>

                      <th> <font color="#dc6c58"> S </font></th>

                      <th><font color="#dc6c58"> At İsmi</font></th>
					  
					  <th><font color="#dc6c58"> Yaş</font></th>

                      <th><font color="#dc6c58"> Orijin Anne </font></th>

                      <th><font color="#dc6c58"> Orijin Baba</font></th>
                          
                      <th><font color="#dc6c58"> Sıklet</font></th>
					  
					  <th><font color="#dc6c58"> Jokey</font></th>

                      <th><font color="#dc6c58"> Sahip</font></th>
					  
					  <th><font color="#dc6c58"> Antrenörü</font></th>

                      <th><font color="#dc6c58"> Derece</font></th>

                      <th><font color="#dc6c58"> Gny</font></th>
                          
                      <th><font color="#dc6c58"> AGF</font></th>
					  
					  <th><font color="#dc6c58"> St</font></th>

                      <th><font color="#dc6c58"> Fark</font></th>
                          
                      <th><font color="#dc6c58"> HP</font></th>

                    </tr>
                  </thead>
                 
				 <tbody>
                    <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT * FROM yarislar5"); while($oku = mysqli_fetch_array($sorgu)){ ?>

                      <td><?php echo $oku['at_id']; ?></td>

                      <td><?php echo $oku['at_ismi']; ?></td>
					  
					  <td><?php echo $oku['at_yas'];  ?></td>

                      <td><?php echo $oku['orjin_anne']; ?></td>

                      <td><?php echo $oku['orjin_baba']; ?></td>
					  
					  <td><?php echo $oku['at_kilo']; ?></td>
					  
					  <td><?php echo $oku['jokey_ad']; ?></td>

                      <td><?php echo $oku['sahip_ad']; ?></td>
					  
					  <td><?php echo $oku['antrenör_ad'];  ?></td>

                      <td><?php echo $oku['at_derece']; ?></td>

                      <td><?php echo $oku['at_gny']; ?></td>
					  
					  <td><?php echo $oku['at_agf']; ?></td>
					  
					  <td><?php echo $oku['at_st']; ?></td>

                      <td><?php echo $oku['at_fark']; ?></td>
					  
					  <td><?php echo $oku['at_hp']; ?></td>
					  
                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>
		  
		  
		  
		  
		  <div class="card-body">
<form action="islem.php" method="POST">
<center> <h3>6. Koşu </h3><h4> (3 Yaşlı İngilizler - 2000 Kum) </h4>  </center>
				
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="%100" cellspacing="0">
                  <thead>
                    <tr>

                      <th> <font color="#dc6c58"> S </font></th>

                      <th><font color="#dc6c58"> At İsmi</font></th>
					  
					  <th><font color="#dc6c58"> Yaş</font></th>

                      <th><font color="#dc6c58"> Orijin Anne </font></th>

                      <th><font color="#dc6c58"> Orijin Baba</font></th>
                          
                      <th><font color="#dc6c58"> Sıklet</font></th>
					  
					  <th><font color="#dc6c58"> Jokey</font></th>

                      <th><font color="#dc6c58"> Sahip</font></th>
					  
					  <th><font color="#dc6c58"> Antrenörü</font></th>

                      <th><font color="#dc6c58"> Derece</font></th>

                      <th><font color="#dc6c58"> Gny</font></th>
                          
                      <th><font color="#dc6c58"> AGF</font></th>
					  
					  <th><font color="#dc6c58"> St</font></th>

                      <th><font color="#dc6c58"> Fark</font></th>
                          
                      <th><font color="#dc6c58"> HP</font></th>

                    </tr>
                  </thead>
                 
				 <tbody>
                    <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT * FROM yarislar6"); while($oku = mysqli_fetch_array($sorgu)){ ?>

                      <td><?php echo $oku['at_id']; ?></td>

                      <td><?php echo $oku['at_ismi']; ?></td>
					  
					  <td><?php echo $oku['at_yas'];  ?></td>

                      <td><?php echo $oku['orjin_anne']; ?></td>

                      <td><?php echo $oku['orjin_baba']; ?></td>
					  
					  <td><?php echo $oku['at_kilo']; ?></td>
					  
					  <td><?php echo $oku['jokey_ad']; ?></td>

                      <td><?php echo $oku['sahip_ad']; ?></td>
					  
					  <td><?php echo $oku['antrenör_ad'];  ?></td>

                      <td><?php echo $oku['at_derece']; ?></td>

                      <td><?php echo $oku['at_gny']; ?></td>
					  
					  <td><?php echo $oku['at_agf']; ?></td>
					  
					  <td><?php echo $oku['at_st']; ?></td>

                      <td><?php echo $oku['at_fark']; ?></td>
					  
					  <td><?php echo $oku['at_hp']; ?></td>
					  
                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>
		  
		  
		  
		  <div class="card-body">
<form action="islem.php" method="POST">
<center> <h3>7. Koşu </h3><h4> (2 Yaşlı İngilizler - 57 kg - 1000 Çim) </h4>  </center>
				
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="%100" cellspacing="0">
                  <thead>
                    <tr>

                      <th> <font color="#dc6c58"> S </font></th>

                      <th><font color="#dc6c58"> At İsmi</font></th>
					  
					  <th><font color="#dc6c58"> Yaş</font></th>

                      <th><font color="#dc6c58"> Orijin Anne </font></th>

                      <th><font color="#dc6c58"> Orijin Baba</font></th>
                          
                      <th><font color="#dc6c58"> Sıklet</font></th>
					  
					  <th><font color="#dc6c58"> Jokey</font></th>

                      <th><font color="#dc6c58"> Sahip</font></th>
					  
					  <th><font color="#dc6c58"> Antrenörü</font></th>

                      <th><font color="#dc6c58"> Derece</font></th>

                      <th><font color="#dc6c58"> Gny</font></th>
                          
                      <th><font color="#dc6c58"> AGF</font></th>
					  
					  <th><font color="#dc6c58"> St</font></th>

                      <th><font color="#dc6c58"> Fark</font></th>
                          
                      <th><font color="#dc6c58"> HP</font></th>

                    </tr>
                  </thead>
                 
				 <tbody>
                    <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT * FROM yarislar7"); while($oku = mysqli_fetch_array($sorgu)){ ?>

                      <td><?php echo $oku['at_id']; ?></td>

                      <td><?php echo $oku['at_ismi']; ?></td>
					  
					  <td><?php echo $oku['at_yas'];  ?></td>

                      <td><?php echo $oku['orjin_anne']; ?></td>

                      <td><?php echo $oku['orjin_baba']; ?></td>
					  
					  <td><?php echo $oku['at_kilo']; ?></td>
					  
					  <td><?php echo $oku['jokey_ad']; ?></td>

                      <td><?php echo $oku['sahip_ad']; ?></td>
					  
					  <td><?php echo $oku['antrenör_ad'];  ?></td>

                      <td><?php echo $oku['at_derece']; ?></td>

                      <td><?php echo $oku['at_gny']; ?></td>
					  
					  <td><?php echo $oku['at_agf']; ?></td>
					  
					  <td><?php echo $oku['at_st']; ?></td>

                      <td><?php echo $oku['at_fark']; ?></td>
					  
					  <td><?php echo $oku['at_hp']; ?></td>
					  
                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>
		  
		  
		  
		  


            
        
        <div class="clear"></div>
       
   
      
<script>
	Cufon.now();
</script>
</body>
</html>
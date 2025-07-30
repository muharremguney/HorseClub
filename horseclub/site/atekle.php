<?php

require 'config.php';
require 'verot.net.php';
include 'baglan.php';
session_start();
if (!isset($_SESSION["userid"]));

if ($_POST) {
    $foo = new upload($_FILES['gorsel']);
    if ($foo->uploaded) {
        $foo->file_new_name_body = 'resim';
        $foo->process('images');
        if ($foo->processed) {
            $resim_adi = $foo->file_dst_name;

            DB::insert("INSERT INTO icerikler(user_id,satilik_ad,satilik_irk,satilik_tip,satilik_yas,satilik_cinsiyet,satilik_anne,satilik_baba,fiyat,durum,resim) VALUES(?,?,?,?,?,?,?,?,?,?,?)", array(
                
				$user_id = $_SESSION["userid"],
                $_POST['satilik_ad'],
				$_POST['satilik_irk'],
                $_POST['satilik_tip'],
				$_POST['satilik_yas'],
                $_POST['satilik_cinsiyet'],
				$_POST['satilik_anne'],
                $_POST['satilik_baba'],
				$_POST['fiyat'],
				$durum = "Satılık",
                $resim_adi,
            ));
            Header("location:atekle.php?success=1");
        } else {
            Header("location:atekle.php?resimHata=" . $foo->error);
        }
    } else {
        Header("location:atekle.php?resimHata=Lütfen resim yükleyiniz.");
    }
}


?>


<!doctype html>
<html lang="tr">

<head>
<title>İlan Ekle</title>
	<link rel="icon" href="logoicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/selam.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>

<body style="background-color:black">

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
            <li class="current"><a href="alimsatim.php">İlanlar</a></li>
            <li><a href="etkinlikler.php">Etkinlikler</a></li>
			<li><a href="bakimbeslenme.php">Bakım ve Beslenme</a></li>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
			<li><a href="index.php"><font color="#616969"> Çıkış Yap</font></a>
        </ul>
        <div class="clear"></div>
     </nav>

    	
    <main class="login-form">
	
         <div class="container"> 
            <div class="row justify-content-center">
                <div class="col">
                    <?php if (isset($_GET['resimHata'])) : ?>
                        <div class="alert alert-danger">
                            <?php echo $_GET['resimHata'] ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['success'])) : ?>
                        <div class="alert alert-success" >
                           <center> İlan Başarıyla Eklendi :) </center>
                        </div>
                    <?php endif; ?>
                    <div class="card" >
                        <div class="card-header"> <font color="#EF6F53"> <b> İlan Ekle </b></font></div>
                        <div class="card-body"  >
                            <form action="" method="POST" enctype="multipart/form-data">
                                
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"> <font color="#EF6F53"> Atın Adı : </font></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="satilik_ad" required>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"> <font color="#EF6F53">Atın Irkı :</font></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="satilik_irk" required>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"><font color="#EF6F53">Atın Tipi :</font></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="satilik_tip" required>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"><font color="#EF6F53">Atın Yaşı :</font></label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="satilik_yas" required>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"><font color="#EF6F53">Atın Cinsiyeti :</font></label>
                                    <div class="col-md-6">
                                        <select name="satilik_cinsiyet" class="form-control" required="">
              <option value="">Seçiniz...</option>
              <?php  $kategoriSorgusu = mysqli_query($conn,"select * from at_cinsiyet where satilik_cinsiyet");
			  
			  
			  
              while ($oku = mysqli_fetch_array($kategoriSorgusu)) { ?>
              <option <?php if(isset($_GET['id'])){echo $oku['satilik_cinsiyet'] == $sorgu['satilik_cinsiyet'] ? 'selected' : '';} ?> value="<?php echo $oku['satilik_cinsiyet']; ?>"><?php echo $oku['cinsiyet_ad']; ?></option>
            <?php } ?>
            </select>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"><font color="#EF6F53">Atın Annesi :</font></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="satilik_anne" required>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"><font color="#EF6F53">Atın Babası :</font></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="satilik_baba" required>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"><font color="#EF6F53">Atın Fiyatı :</font></label>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="fiyat" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right"><font color="#EF6F53">Dosya :</font></label>
                                    <div class="col-md-6">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="gorsel">
                                            <label class="custom-file-label" for="customFile">Seçiniz</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-8 offset-md-6">
                                    <button type="submit" class="btn btn-danger">
                                        İlan Ver
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
	<br>
</body>

</html>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
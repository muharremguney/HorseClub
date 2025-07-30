<!DOCTYPE html>
<html lang="en">

<head>

    
    <title>Kayıt</title>
	<link rel="icon" href="logoicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
 
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/Kozuka_L_300.font.js"></script>
    <script src="js/Kozuka_B_700.font.js"></script>
	
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">



  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  
  
  
  
  
  
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Giriş</title>

 
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



 
	
</head>



<body style="background-color:black">
  
	<div align="center">
    	<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<a href="index.php">
   

        	<img src="images/logo.png" alt="">
		</a>
		</div>	
		
		
		
		
		
          
           <div class="row justify-content-md-center">
           
              <div class="col-lg-4">
                <div class="p-5 text-center">
				<form action="islem.php" method="POST" class="user">

      		    <div class="form-group">
                <input type="text" name="adi" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["adi"].'"' ?> class="form-control form-control-user" placeholder="Adınızı Giriniz" required="">
	            </div>
	            
				<div class="form-group">
				<input type="text" name="soyadi" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["soyadi"].'"' ?> class="form-control form-control-user" placeholder="Soyadınızı Giriniz" required="">
				</div>
				
				<div class="form-group">
                <input type="email" name="mails" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["mails"].'"' ?> class="form-control form-control-user" placeholder="Mail Adresinizi Giriniz" required="">
	            </div>
	            
				<div class="form-group">
				<input type="text" name="user_kadi" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["user_kadi"].'"' ?> class="form-control form-control-user" placeholder="Kullanıcı Adı Belirleyiniz" required="">
				</div>
				
				<div class="form-group">
				<input type="password" name="user_sifre" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["user_sifre"].'"' ?> class="form-control form-control-user" placeholder="Şifre Belirleyiniz" required="">
				</div>
				
				
				<input type="submit"  name="uye-ekle" class="btn btn-danger btn-user btn-block " value="Kayıt Ol" name="giris">
                </div>
                 
                </form>
				


                
                </div>
             
              </div>
            </div>

<script>
	Cufon.now();
</script>
</body>
</html>
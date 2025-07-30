
<?php
 
$silinecekID= $_GET['id'];
 
$baglan=mysqli_connect("localhost","root","","horseclub");
mysqli_set_charset($baglan, "utf8");
 
$sonuc=mysqli_query($baglan,"UPDATE icerikler SET durum = 'Satıldı' WHERE id =".$silinecekID);
 
if($sonuc>0){
header( "refresh:0;url=profil.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
 
?>
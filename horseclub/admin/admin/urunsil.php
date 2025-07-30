<?php
 
$silinecekID= $_GET['id'];
 
$baglan=mysqli_connect("localhost","root","","horseclub");
mysqli_set_charset($baglan, "utf8");
 
$sonuc=mysqli_query($baglan,"DELETE from icerikler
where id=".$silinecekID);
 
if($sonuc>0){
header( "refresh:0;url=dersler.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";
 
?>
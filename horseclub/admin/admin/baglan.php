<?php 



$conn = mysqli_connect("localhost","root","","horseclub") or die("hata");
function baglan(){
	 $conn = mysqli_connect("localhost","root","","horseclub") or die("hata");
return $conn;
}

mysqli_query($conn,"SET NAMES UTF8");



 

?>
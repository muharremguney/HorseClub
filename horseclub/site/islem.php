 <?php 

include 'baglan.php';
date_default_timezone_set('Europe/Istanbul');

function SEO($s) {

 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',',' ','!','?');

 $eng= array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','-','','');

 $s = str_replace($tr,$eng,$s);

 $s = strtolower($s);

 $s = preg_replace('/&.+?;/', '', $s);

 $s = preg_replace('|-+|', '-', $s);

 $s = preg_replace('/#/', '', $s);

 $s = str_replace('.', '', $s);

$s = str_replace(' ', '', $s);

 $s = trim($s, '-');

 return $s;

} 




session_start();








	
	
//uye ekle
if (isset($_POST['uye-ekle'])) {
	$adi = addslashes($_POST['adi']);
	$soyadi = addslashes($_POST['soyadi']);
	$mails = addslashes($_POST['mails']);
	$user_kadi = addslashes($_POST['user_kadi']);
	$user_sifre = addslashes($_POST['user_sifre']);
	
	
	
	
	if (mysqli_query($conn,"insert into user(adi,soyadi,mails,user_kadi,user_sifre) values('$adi','$soyadi','$mails','$user_kadi','$user_sifre')")) {
		header("Location: giris.php?durum=ok");

	}else header("Location: kayit.php?durum=no");
}

//uye guncelle

if (isset($_POST['uye-guncelle'])) {
	$id   = $_POST['user_id'];
	$uye_ad = addslashes($_POST['adi']);
	$uye_soyad = addslashes($_POST['soyadi']);
	$uye_mail = addslashes($_POST['mails']);
	$uye_kadi = addslashes($_POST['user_kadi']);
	$uye_sifre = addslashes($_POST['user_sifre']);
	
	
	if (mysqli_query($conn,"update user set adi = '$uye_ad',soyadi = '$uye_soyad',mails = '$uye_mail',user_kadi = '$uye_kadi',user_sifre = '$uye_sifre' where user_id=$id")) {
		header("Location: profil.php?durum=ok&id=$id");

	}else header("Location: profil.php?durum=no&id=$id");
}
// iletisim
if (isset($_POST['iletisim-ekle'])) {
	$iletisim_isim = addslashes($_POST['iletisim_isim']);
	$iletisim_mail = addslashes($_POST['iletisim_mail']);
	$iletisim_telefon= addslashes($_POST['iletisim_telefon']);
	$iletisim_ileti = addslashes($_POST['iletisim_ileti']);
	
	
	
	
	
	if (mysqli_query($conn,"insert into iletisim(iletisim_isim,iletisim_mail,iletisim_telefon,iletisim_ileti) values('$iletisim_isim','$iletisim_mail','$iletisim_telefon','$iletisim_ileti')")) {
		header("Location: iletisim.php?durum=ok");

	}else header("Location: iletisim.php?durum=no");
}


if (isset($_POST['kategori-guncelle'])) {
	$id   = $_POST['kategori-id'];
	$kategori = addslashes($_POST['kategori-adi']);
	if (mysqli_query($conn,"update kategori set kategori_ad = '$kategori' where kategori_id=$id")) {
		header("Location: dersler.php?durum=ok&id=$id");

	}else header("Location: dersler.php?durum=no&id=$id");
}















 ?>
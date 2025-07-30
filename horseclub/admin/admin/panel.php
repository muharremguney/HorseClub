<?php include'header.php'; ?>


<?php


	   $post = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) as adet from icerikler"));
	   $post2 = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) as adet from user WHERE user.user_kadi != 'admin'"));
	   $post3 = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) as adet from iletisim"));
	   $post4 = mysqli_fetch_assoc(mysqli_query($conn,"select count(*) as adet from icerikler WHERE icerikler.durum = 'Aktif'"));
       
       
  ?>
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-m font-weight-bold text-danger text-uppercase mb-1">İlanlar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><div id="post-sayi"></div></div>
                    </div>
                    <div class="col-auto">
                     <a href="soru-ekle.php"> <i class="fas fa-layer-group fa-2x text-gray-300"></a></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-m font-weight-bold text-danger text-uppercase mb-1">Kullanıcılar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><div id="post2-sayi"></div></div>
                    </div>
                    <div class="col-auto">
                     <a href="soru-ekle.php"> <i class="fas fa-user fa-2x text-gray-300"></a></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-m font-weight-bold text-danger text-uppercase mb-1">İletişim</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><div id="post3-sayi"></div></div>
                    </div>
                    <div class="col-auto">
                     <a href="soru-ekle.php"> <i class="fas fa-comment fa-2x text-gray-300"></a></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-m font-weight-bold text-danger text-uppercase mb-1">Satılık Atlar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><div id="post4-sayi"></div></div>
                    </div>
                    <div class="col-auto">
                     <a href="soru-ekle.php"> <i class="fas fa-horse fa-2x text-gray-300"></a></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
			
<div class="card shadow mb-4">

              <div class="card-header py-3">

                <h6 class="m-0 font-weight-bold text-danger float-left mt-2">Tüm İlanlar</h6>

                

            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="%100" cellspacing="0">

                  <thead>

                    <tr>

                      

                      <th>#</th>

                      <th>At Sahibi</th>
					  
					  <th>Adı</th>

                      <th>Irkı</th>

                      <th>Tipi</th>
                                                
                      <th>Yaşı</th>
					  
					  <th>Cinsiyeti</th>

                      <th>Annesi</th>
					  
					  <th>Babası</th>

                      <th>Fiyat</th>

                      <th>İlan Durumu</th>
                                                
                    



                    </tr>

                  </thead>



                  <tbody>

                    <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT icerikler.id, CONCAT(user.adi, ' ', user.soyadi) AS isim, icerikler.satilik_ad, icerikler.satilik_irk, icerikler.satilik_tip, icerikler.satilik_yas, at_cinsiyet.cinsiyet_ad, icerikler.satilik_anne, icerikler.satilik_baba, icerikler.fiyat, icerikler.durum
from icerikler, user, at_cinsiyet 
WHERE icerikler.user_id= user.user_id AND icerikler.satilik_cinsiyet = at_cinsiyet.satilik_cinsiyet"); while($oku = mysqli_fetch_array($sorgu)){ ?>

                   

                      <td><?php echo $oku['id']; ?></td>

                      <td><?php echo $oku['isim']; ?></td>
					  
					  <td><?php echo $oku['satilik_ad'];  ?></td>

                      <td><?php echo $oku['satilik_irk']; ?></td>

                      <td><?php echo $oku['satilik_tip']; ?></td>
					  
					  <td><?php echo $oku['satilik_yas']; ?></td>
					  
					  <td><?php echo $oku['cinsiyet_ad']; ?></td>
					   
					  <td><?php echo $oku['satilik_anne']; ?></td>
						
					  <td><?php echo $oku['satilik_baba']; ?></td>
						 
					  <td><?php echo $oku['fiyat']; ?></td>
						  
					  <td><?php echo $oku['durum']; ?></td>
					  
					  
					  
                      
                        

  

                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>			
			
			
	
          
			
			
			





<script type="text/javascript">

function animateValue(id, start, end, duration) {
   
    var obj = document.getElementById(id);
    var range = end - start;
    var minTimer = 50;
    var stepTime = Math.abs(Math.floor(duration / range));
    stepTime = Math.max(stepTime, minTimer);
    var startTime = new Date().getTime();
    var endTime = startTime + duration;
    var timer;
  
    function run() {
        var now = new Date().getTime();
        var remaining = Math.max((endTime - now) / duration, 0);
        var value = Math.round(end - (remaining * range));
        obj.innerHTML = value;
        if (value == end) {
            clearInterval(timer);
        }
    }
    
    timer = setInterval(run, stepTime);
    run();
}

animateValue("post-sayi", 0, <?php echo $post["adet"]; ?>, 1700);
animateValue("post2-sayi", 0, <?php echo $post2["adet"]; ?>, 1700);
animateValue("post3-sayi", 0, <?php echo $post3["adet"]; ?>, 1700);
animateValue("post4-sayi", 0, <?php echo $post4["adet"]; ?>, 1700);




</script>
<?php include'footer.php'; ?>
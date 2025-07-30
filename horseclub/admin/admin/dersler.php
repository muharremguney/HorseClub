<?php include 'header.php'; ?>

   <div class="card shadow mb-4">
       <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">İlan Güncelleme <?php if (isset($_GET['id'])):
            $sorgu = mysqli_fetch_array(mysqli_query($conn,"select * from icerikler where id=".$_GET['id']));

             ?>
         
        <?php endif ?></h6>
       </div>

       <div class="card-body">
<form action="islem.php" method="POST">

  

          <div class="form-group row justify-content-center">
          <label  class="col-sm-2 col-form-label">İlan İd:</label>
          <div class="col-sm-5">

      <input type="text" name="id" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["id"].'"' ?> class="form-control">
      </div>
      </div>
      
      
	
	
          <div class="form-group row justify-content-center">
          <label  class="col-sm-2 col-form-label">Atın Adı:</label>
          <div class="col-sm-5">

      <input type="text" name="satilik_ad" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["satilik_ad"].'"' ?> class="form-control" aria-describedby="basic-addon1" >
      </div>
      </div>
      
      <div class="form-group row justify-content-center">
         <label  class="col-sm-2 col-form-label">Atın Irkı:</label>

    <div class="col-sm-5">

      <input type="text" name="satilik_irk" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["satilik_irk"].'"' ?> class="form-control">
   </div>
    </div>
	
	<div class="form-group row justify-content-center">
         <label  class="col-sm-2 col-form-label">Atın Tipi:</label>

    <div class="col-sm-5">

      <input type="text" name="satilik_tip" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["satilik_tip"].'"' ?> class="form-control">
   </div>
    </div>
	
	<div class="form-group row justify-content-center">
         <label  class="col-sm-2 col-form-label">Atın Yaşı:</label>

    <div class="col-sm-5">

      <input type="text" name="satilik_yas" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["satilik_yas"].'"' ?> class="form-control">
   </div>
    </div>
	
	<div class="form-group row justify-content-center">
   			<label  class="col-sm-2 col-form-label">Atın Cinsiyeti:</label>
   				<div class="col-sm-5">
            <select name="satilik_cinsiyet" class="form-control" required="">
              <option value="">Seçiniz...</option>
              <?php  $kategoriSorgusu = mysqli_query($conn,"select * from at_cinsiyet where satilik_cinsiyet");
			  
			  
			  
              while ($oku = mysqli_fetch_array($kategoriSorgusu)) { ?>
              <option <?php if(isset($_GET['id'])){echo $oku['satilik_cinsiyet'] == $sorgu['satilik_cinsiyet'] ? 'selected' : '';} ?> value="<?php echo $oku['satilik_cinsiyet']; ?>"><?php echo $oku['cinsiyet_ad']; ?></option>
            <?php } ?>
            </select>
            
     				
   				</div>
  			</div>
	
	<div class="form-group row justify-content-center">
         <label  class="col-sm-2 col-form-label">Atın Annesi:</label>

    <div class="col-sm-5">

      <input type="text" name="satilik_anne" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["satilik_anne"].'"' ?> class="form-control">
   </div>
    </div>
	
	<div class="form-group row justify-content-center">
         <label  class="col-sm-2 col-form-label">Atın Babası:</label>

    <div class="col-sm-5">

      <input type="text" name="satilik_baba" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["satilik_baba"].'"' ?> class="form-control">
   </div>
    </div>
	
	<div class="form-group row justify-content-center">
         <label  class="col-sm-2 col-form-label">Atın Fiyatı:</label>

    <div class="col-sm-5">

      <input type="text" name="fiyat" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["fiyat"].'"' ?> class="form-control">
   </div>
    </div>
	
	<div class="form-group row justify-content-center">
         <label  class="col-sm-2 col-form-label">İlan Durumu:</label>

    <div class="col-sm-5">

      <input type="text" name="durum" <?php if (isset($_GET["id"])) echo 'value="'.$sorgu["durum"].'"' ?> class="form-control">
   </div>
    </div>
	
	

      <div class="form-group row justify-content-center">
        
            <div class="col-sm-5">
        <?php if (isset($_GET['id'])): ?>
            <input type="submit" value="Güncelle" name="urun-guncelle" class="form-control btn btn-info">
                <input type="hidden" name="urun-id" value="<?php echo $_GET['id']; ?>"
              <?php else: ?>
            
          <?php endif ?>
            </div>
        </div>
		


  	</form>
       </div>
    </div>
<div class="card shadow mb-4">

              <div class="card-header py-3">

                <h6 class="m-0 font-weight-bold text-danger float-left mt-2">Mevcut İlanlar</h6>

              
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

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
                      
                           

                      <th>Düzenle</th>

                       <th>Sil</th>

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
					  
					  
					  
                      
                        

  

                    
                      
                        

                       <td><a href="dersler.php?id=<?php echo $oku['id'] ?>" class="btn btn-sm btn-info">Düzenle</a></td>

                       <td>  <a href="urunsil.php?id=<?php echo $oku['id'] ?>" class="btn btn-sm btn-danger"  >Sil</a></td> 

                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>




<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>


             <?php if (isset($_GET['id'])):
            $sorgu = mysqli_fetch_array(mysqli_query($conn,"select * from iletisim where iletisim_id=".$_GET['id']));

             ?>
         
        <?php endif ?>
      


<div class="card shadow mb-4">

              <div class="card-header py-3">

                <h6 class="m-0 font-weight-bold text-danger float-left mt-2">İletiler</h6>

              
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                       <th>#</th>

                      <th>İsim</th>
					  
					  <th>Mail</th>

                      <th>Telefon</th>

                      <th>İleti</th>
                                                
               
					  
					  
                           

                 

                       <th>Sil</th>

                    </tr>

                  </thead>



                  <tbody>

                     <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT * FROM iletisim"); while($oku = mysqli_fetch_array($sorgu)){ ?>

                   

                      <td><?php echo $oku['iletisim_id']; ?></td>

                      <td><?php echo $oku['iletisim_isim']; ?></td>
					  
					  <td><?php echo $oku['iletisim_mail'];  ?></td>

                      <td><?php echo $oku['iletisim_telefon']; ?></td>

                      <td><?php echo $oku['iletisim_ileti']; ?></td>
					  
					
					  

                   

                       <td>  <a href="iletisil.php?id=<?php echo $oku['iletisim_id'] ?>" class="btn btn-sm btn-danger"  >Sil</a></td> 

                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>




<?php include 'footer.php'; ?>
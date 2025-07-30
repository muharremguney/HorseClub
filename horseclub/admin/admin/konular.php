<?php include 'header.php'; ?>


             <?php if (isset($_GET['id'])):
            $sorgu = mysqli_fetch_array(mysqli_query($conn,"select * from user where user_id=".$_GET['id']));

             ?>
         
        <?php endif ?>
      


<div class="card shadow mb-4">

              <div class="card-header py-3">

                <h6 class="m-0 font-weight-bold text-danger float-left mt-2">Kullanıcılar</h6>

              
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                       <th>#</th>

                      <th>Ad</th>
					  
					  <th>Soyad</th>

                      <th>Mail</th>

                      <th>Kullanıcı Adı</th>
                                                
                      <th>Şifre</th>
					  
					  
                           

                 

                       <th>Sil</th>

                    </tr>

                  </thead>



                  <tbody>

                     <tr>

                      <?php $sorgu = mysqli_query($conn, "SELECT * FROM user WHERE user.user_kadi != 'admin'"); while($oku = mysqli_fetch_array($sorgu)){ ?>

                   

                      <td><?php echo $oku['user_id']; ?></td>

                      <td><?php echo $oku['adi']; ?></td>
					  
					  <td><?php echo $oku['soyadi'];  ?></td>

                      <td><?php echo $oku['mails']; ?></td>

                      <td><?php echo $oku['user_kadi']; ?></td>
					  
					  <td><?php echo $oku['user_sifre']; ?></td>
					  

                   

                       <td>  <a href="usersil.php?id=<?php echo $oku['user_id'] ?>" class="btn btn-sm btn-danger"  >Sil</a></td> 

                    </tr>

                  <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>




<?php include 'footer.php'; ?>
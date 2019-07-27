<?php
require 'dashboard_part/header.php';
 ?>
<?php
$select= "SELECT COUNT(*) as pavel FROM messages ";
$result=mysqli_query($db_connection,$select);
$assoc=mysqli_fetch_assoc($result);
 ?>

 <?php
 $select1= "SELECT COUNT(*) as pavel1 FROM user_info ";
 $result1=mysqli_query($db_connection,$select1);
 $assoc1=mysqli_fetch_assoc($result1);
  ?>
  <?php
  $select2= "SELECT COUNT(*) as pavel2 FROM department ";
  $result2=mysqli_query($db_connection,$select2);
  $assoc2=mysqli_fetch_assoc($result2);
   ?>

 <div class="row">
   <div class="col-lg-4">
     <div class="card text-center h2 ">
  <div class="card-header bg-primary text-white">
    Total messages
  </div>
  <div class="card-body">
    <h1 class="card-title"><?php echo $assoc['pavel'] ; ?></h1>

    <a href="message_vew.php" class="btn btn-primary">view message</a>
  </div>

</div>
   </div>

   <div class="col-lg-4">
     <div class="card text-center h2 ">
  <div class="card-header bg-primary text-white">
    Total users
  </div>
  <div class="card-body">
    <h1 class="card-title"><?php echo $assoc1['pavel1']; ?></h1>

    <a href="users_info.php" class="btn btn-primary">View users</a>
  </div>

</div>
   </div>

   <div class="col-lg-4">
     <div class="card text-center h2 ">
   <div class="card-header bg-primary text-white">
    Total messages
   </div>
   <div class="card-body">
    <h1 class="card-title"><?php echo $assoc2['pavel2'] ; ?></h1>

    <a href="view_depart.php" class="btn btn-primary">View Department</a>
   </div>

   </div>
   </div>


 </div>
 <?php
require 'dashboard_part/footer.php';
  ?>

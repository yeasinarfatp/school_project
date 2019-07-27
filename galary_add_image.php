<?php
session_start();
require 'dashboard_part/header.php';
 ?>
 <div class="col-lg-12">
   <div class="bg-primary text-center text-white py-2">
     <h1>Add image</h1>
   </div>
   <div class="">
     <?php
if (isset($_SESSION['success'])) {
      ?>
      <div class="alert alert-success" role="alert">
        <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
         ?>
      </div>
    <?php } ?>
   </div>
   <div class="">
     <form  action="galary_add_image_post.php" method="post" enctype="multipart/form-data">
       <div class="my-2">
         <input type="file" name="image" class="form-control">
       </div>
       <div class="my-2">
          <input type="text" name="category" class="form-control" placeholder="Type your category">
       </div>
       <div class="">
         <button type="submit" class="btn btn-primary">Add image</button>
       </div>

     </form>
   </div>

 </div>
 <?php
require 'dashboard_part/footer.php';
  ?>

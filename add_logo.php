<?php
require 'dashboard_part/header.php';
 ?>
 <div class="col-lg-12">
   <div class="bg-primary text-center text-white py-2">
     <h1>Add logo</h1>
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
     <form  action="logo_post.php" method="post" enctype="multipart/form-data">
       <div class="my-2">
         <input type="file" name="logo" class="form-control">
       </div>
       <div class="my-2">
         <select class="form-control" name="status">
           <option value="0">--select status--</option>
            <option value="1">Active</option>
            <option value="2">De active</option>
         </select>
       </div>
       <div class="">
         <button type="submit" class="btn btn-primary">Add logo</button>

       </div>

     </form>
   </div>

 </div>

 <?php
require 'dashboard_part/footer.php';
  ?>

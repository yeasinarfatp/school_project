<?php
session_start();
require 'dashboard_part/header.php';
 ?>
 <div class="col-lg-12">
   <div class="bg-primary text-center text-white py-2">
     <h1>Add News</h1>
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
     <form  action="add_news_post.php" method="post" enctype="multipart/form-data">
       <div class="my-2">
         <input type="file" name="image" class="from-control">
       </div>
       <div class="my-2">
        <textarea name="news" rows="4"  class="form-control" placeholder="Please Type your news "></textarea>
       </div>
       <div class="my-2">
         <input type="date" name="date" class="form-control">
       </div>
       <div class="my-2">
         <input type="text" name="btn" class="form-control" placeholder="Enter your button name">
       </div>

       <div class="my-2">
         <select class="form-control" name="status">
           <option value="0">--select status--</option>
            <option value="1">Active</option>
            <option value="2">De active</option>
         </select>
       </div>
       <div class="">
         <button type="submit" class="btn btn-primary">Add News</button>

       </div>

     </form>
   </div>

 </div>


 <?php
require 'dashboard_part/footer.php';
  ?>

<?php
require 'dashboard_part/header.php';
 ?>

       <div class="col-lg-12 m-auto p-3 mb-2 p-3 mb-2 bg-info text-white">
         <div class="col-lg-0 text-center p-3 mb-2 bg-primary text-white">
           <h1>Principle Message </h1>

         </div>

         <form action="principle_post.php" method="post" enctype="multipart/form-data" class="bg-light">
           <div class="row">
             <div class="col-lg-12 pt-2">

                <label for="" class="text-dark m-2">Title</label>
           <input type="text" name="title" class="form-control" placeholder="Message title">

             </div>

             <div class="col-lg-12 pt-2">

                <label for="" class="text-dark m-2">image</label>
           <input type="file" name="principle_img" class="form-control">

             </div>

             <div class="col-lg-12 pt-2 ">
               <label for="" class="text-dark m-2">Message</label>
           <textarea class="form-control" name="message" placeholder="Description"></textarea>

           </div>
             <div class="col-lg-12 pt-2">
               <label for="" class="text-dark m-2">Button</label>
           <input type="text" name="btn" class="form-control" placeholder="Button name">

           </div>
           <div class="col-lg-12 pt-2">

              <label for="" class="text-dark m-2">Name</label>
         <input type="text" name="fname" class="form-control" placeholder="type your name">

           </div>


 <div class=" col-lg-12 pt-2 text-center text-danger">
    <?php
if (!empty($_GET['success'])) {
  echo $_GET['success'];
}
     ?>
 </div>
             <div class="p-3 bg-info text-white col-lg-12 pt-2">
             <div class="col-lg-12 text-center pt-2 bg-primary text-white ">
            <button type="submit" class="btn btn-info">Submit</button>
            </div>
          </div>


           </div>
         </form>
       </div>
       <?php
      require 'dashboard_part/footer.php';
        ?>

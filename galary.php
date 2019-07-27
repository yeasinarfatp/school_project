<?php
require 'dashboard_part/header.php';
 ?>

<?php
$select_query="SELECT * FROM galary";
$result=mysqli_query($db_connection,$select_query);
 ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
 <div class="col-lg-12 text-center bg-primary py-2">
   <h1>All News</h1>
 </div>

 <table class="table table-bordered bg-light" id="table_id">
  <tbody>
    <thead>
  <tr class="bg-dark text-white">
     <td>Id</td>
     <td>Category</td>
     <td>Image</td>
       <td>Action</td>
   </tr>
 </thead>
   <?php
foreach ($result as $value) {

    ?>
   <tr>
     <td><?php echo $value['id'];?></td>
     <td><?php echo $value['category'];?></td>
     <td>
       <img src="uploads/galary/<?php echo $value['img'];?> ?>" width="100" alt="img">
     </td>
     <td>
     <?php
      if ($_SESSION['role']==1 || $_SESSION['role']==2) {
      ?>
     <a href="image_delete.php?id=<?php echo $value['id'];  ?>"><button type="button" class="btn btn-danger btn btn-sm">Delete</button></a>
   <?php } ?>
     </td>
   </tr>
   <?php } ?>
 </tbody>
 </table>

 <?php
require 'dashboard_part/footer.php';
  ?>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

  <script>
  $(function () {
      $('#table_id').DataTable();
  });
  </script>

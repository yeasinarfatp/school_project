

<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM user_info WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-primary py-3">
        <h2>Update user info</h2>
      </div>
      <form action="update_user.php" enctype="multipart/form-data" method="post">
      <div class="col-lg-0">
        <table class="table table-bordered bg-light">
          <tr>
            <td>Name</td>
            <td>
              <input type="hidden" name="id" value="<?php echo $after_assoc['Id']; ?>" class="form-control">
              <input type="text" name="fname" value="<?php echo $after_assoc['Name']; ?>" class="form-control">

            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td> <input type="email" name="email" value="<?php echo $after_assoc['Email']; ?>" class="form-control"> </td>
          </tr>
        </table>
        <div class="col-lg-12 text-center">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      </form>
    </div>
    <?php
    require 'dashboard_part/footer.php';
     ?>

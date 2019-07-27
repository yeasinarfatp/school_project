

<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM logo WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-primary py-3">
        <h2>Update logo</h2>
      </div>
      <form action="update_logo.php" enctype="multipart/form-data" method="post">
      <div class="col-lg-0">
        <table class="table table-bordered bg-light">
          <tr>
            <td>Status</td>
            <td>
              <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>" class="form-control">
              <select class="form-control" name="status">
                <option value="0">--select status--</option>
                <option value="1">Active</option>
                <option value="2">Deactive</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Change Logo</td>
            <td> <input type="file" name="logo" class="form-control"> </td>
          </tr>
          <tr>
            <td>Logo</td>
            <td> <img src="uploads/logo/<?php echo $after_assoc['logo']; ?>" alt="logo img" class="img-fluid" width="300"> </td>
          </tr>
        </table>
        <div class="">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
      </form>
    </div>
    <?php
    require 'dashboard_part/footer.php';
     ?>



<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM banner WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-primary py-3">
        <h2>Update banner</h2>
      </div>
      <form action="update_banner.php" enctype="multipart/form-data" method="post">
      <div class="col-lg-0">
        <table class="table table-bordered bg-light">
          <tr>
            <td>Name</td>
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
            <td>Change banner</td>
            <td> <input type="file" name="banner" class="form-control"> </td>
          </tr>
          <tr>
            <td>Banner</td>
            <td> <img src="uploads/banner/<?php echo $after_assoc['banner_img']; ?>" alt="banner img" class="img-fluid" width="300"> </td>
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

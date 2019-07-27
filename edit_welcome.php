

<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM welcome WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-primary py-3">
        <h2>Update welcome</h2>
      </div>
      <form action="update_welcome.php" enctype="multipart/form-data" method="post">
      <div class="col-lg-0">
        <table class="table table-bordered bg-light">
          <tr>
            <td>TITLE</td>
            <td>
              <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>" class="form-control">
              <input type="text" name="title" value="<?php echo $after_assoc['title']; ?>" class="form-control">
            </td>
          </tr>
          <tr>
            <td>DESCRIPTION</td>
            <td> <textarea  name="desp" class="form-control"><?php echo $after_assoc['desp']; ?></textarea> </td>
          </tr>

          <tr>
            <td>BUTTON</td>
            <td> <input type="text" name="btn" value="<?php echo $after_assoc['btn']; ?>" class="form-control"> </td>
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

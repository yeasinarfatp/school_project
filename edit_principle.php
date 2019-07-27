

<?php
require 'dashboard_part/header.php';
 ?>
<?php
$user_id = $_GET['id'];
$select_query = "SELECT * FROM principle WHERE id=$user_id";
$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);
?>

    <div class="col-lg-12">
      <div class="text-center bg-primary py-3">
        <h2>Update Messages</h2>
      </div>
      <form action="update_principle.php" enctype="multipart/form-data" method="post">
      <div class="col-lg-0">
        <table class="table table-bordered bg-light">
          <tr>
            <td>Title</td>
            <td>
              <input type="hidden" name="id" value="<?php echo $after_assoc['id']; ?>" class="form-control">
              <input type="text" name="title" value="<?php echo $after_assoc['title']; ?>" class="form-control">

            </td>
          </tr>
          <tr>
            <td>Message</td>
            <td> <textarea name="message" class="form-control"><?php echo $after_assoc['message']; ?></textarea> </td>
          </tr>

          <tr>
            <td>Button</td>
            <td> <input type="text" name="btn" value="<?php echo $after_assoc['btn']; ?>" class="form-control"> </td>
          </tr>
          <tr>
            <td>Name</td>
            <td> <input type="text" name="fname" value="<?php echo $after_assoc['name']; ?>" class="form-control"> </td>
          </tr>

          <tr>
            <td>Present photo</td>
            <td>  <img src="uploads/principle_img/<?php echo$after_assoc['img']; ?>" alt="photo" width="250"> </td>
          </tr>
          <td>Change photo</td>
          <td> <input type="file" name="contact_img" class="form-control"> </td>
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

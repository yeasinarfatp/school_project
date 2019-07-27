<?php
 session_start();
 require 'db.php';
 $status=$_POST['status'];

$uploaded_files=$_FILES['banner'];
$after_explode= explode('.',$uploaded_files['name']);
$extention=end($after_explode);
$allowed_extention= array('jpg','png','jpeg','gif');
if(in_array($extention,$allowed_extention)) {
  if ($uploaded_files['size']<=20000000) {
$insert_query="INSERT INTO banner(status) VALUES('$status')";
$result=mysqli_query($db_connection,$insert_query);
  $last_id= mysqli_insert_id($db_connection);
  $file_name=$last_id.'.'.$extention;
  $new_location= "uploads/banner/".$file_name;
   move_uploaded_file($uploaded_files['tmp_name'],$new_location);
   $update_photo="UPDATE banner SET banner_img='$file_name' WHERE id='$last_id'";
   $uploade_photo=mysqli_query($db_connection,$update_photo);
   $_SESSION['success']="banner added succesfuly";
   header('location:add_banner.php');
  }
  else {
    echo "size onek boro";
  }
}
else {
  echo "formate tik nai";
}
 ?>

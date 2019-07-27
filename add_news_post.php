<?php
session_start();
require 'db.php';
$news=$_POST['news'];
$date=$_POST['date'];
$status=$_POST['status'];
$button=$_POST['btn'];
$uploaded_files=$_FILES['image'];
$after_explode= explode('.',$uploaded_files['name']);
$extention=end($after_explode);
$allowed_extention= array('jpg','png','jpeg','gif');
if(in_array($extention,$allowed_extention)) {
 if ($uploaded_files['size']<=20000000) {
$insert_query="INSERT INTO news( news,news_date,status,btn) VALUES('$news','$date','$status','$button')";
$result=mysqli_query($db_connection,$insert_query);
 $last_id= mysqli_insert_id($db_connection);
 $file_name=$last_id.'.'.$extention;
 $new_location= "uploads/news/".$file_name;
  move_uploaded_file($uploaded_files['tmp_name'],$new_location);
  $update_photo="UPDATE news SET img='$file_name' WHERE id='$last_id'";
  $uploade_photo=mysqli_query($db_connection,$update_photo);
  $_SESSION['success']="Data succesfuly sent";
  header('location:add_news.php');
 }
 else {
     $_SESSION['success']="Size onek boro";
 }
}
else {
  $_SESSION['success']="Formate tiknai";
}
 ?>

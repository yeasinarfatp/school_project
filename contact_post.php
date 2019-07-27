<?php
 session_start();
 require 'db.php';
 $name=$_POST['fname'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];
$uploaded_files=$_FILES['contact_img'];
$after_explode= explode('.',$uploaded_files['name']);
$extention=end($after_explode);
$allowed_extention= array('jpg','png','jpeg','gif');
if(in_array($extention,$allowed_extention)) {
  if ($uploaded_files['size']<=20000000) {
$insert_query="INSERT INTO messages( name, email, subject,message) VALUES('$name','$email','$subject','$message')";
$result=mysqli_query($db_connection,$insert_query);
  $last_id= mysqli_insert_id($db_connection);
  $file_name=$last_id.'.'.$extention;
  $new_location= "uploads/".$file_name;
   move_uploaded_file($uploaded_files['tmp_name'],$new_location);
   $update_photo="UPDATE messages SET photo='$file_name' WHERE id='$last_id'";
   $uploade_photo=mysqli_query($db_connection,$update_photo);
   $_SESSION['success']="Data succesfuly sent";
   header('location:contact.php#content');
  }
  else {
    echo "size onek boro";
  }
}
else {
  echo "formate tik nai";
}
 ?>

<?php
require 'db.php';
$user_id=$_GET['id'];

$select_query= "SELECT user_img FROM user_info WHERE id= $user_id";
$select_result=mysqli_query($db_connection,$select_query);
$after_assoc= mysqli_fetch_assoc($select_result);
$delet_from= "uploads/user".$after_assoc['user_img'];
unlink($delet_from);

$delete="DELETE FROM user_info WHERE id=$user_id";
$result=mysqli_query($db_connection,$delete);
header('location:users_info.php');


 ?>

<?php
require 'db.php';
$user_id=$_GET['id'];

$select_query= "SELECT logo FROM logo WHERE id= $user_id";
$select_result=mysqli_query($db_connection,$select_query);
$after_assoc= mysqli_fetch_assoc($select_result);
$delet_from= "uploads/logo".$after_assoc['logo'];
unlink($delet_from);

$delete="DELETE FROM logo WHERE id=$user_id";
$result=mysqli_query($db_connection,$delete);
header('location:view_logo.php');


 ?>

<?php
require 'db.php';
$user_id=$_GET['id'];

$select_query= "SELECT photo FROM messages WHERE id= $user_id";
$select_result=mysqli_query($db_connection,$select_query);
$after_assoc= mysqli_fetch_assoc($select_result);
$delet_from= "uploads/".$after_assoc['photo'];
unlink($delet_from);

$delete="DELETE FROM messages WHERE id=$user_id";
$result=mysqli_query($db_connection,$delete);
header('location:message_vew.php');


 ?>

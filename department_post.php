<?php
session_start();
 require 'db.php';
 $title=$_POST['title'];
 $info=$_POST['info1'].','.$_POST['info2'].','.$_POST['info3'];
 $icon=$_POST['icon'];
 $status=$_POST['status'];

 $insert_query="INSERT INTO department(title,info,icon,status) VALUES('$title','$info','$icon','$status')";
 $result=mysqli_query($db_connection,$insert_query);

 $_SESSION['success']="department added succesfuly";
 header('location:add_department.php');
 ?>

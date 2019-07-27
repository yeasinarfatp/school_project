<?php
if(!isset($_COOKIE['ajgor'])){
  header ("location:logout.php");
}
else{
  setcookie('ajgor','nobel', time() + 500);
} ?>

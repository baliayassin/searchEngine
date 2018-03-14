<?php
$connection = mysqli_connect("localhost", "root" , "" , "googlesearch");

if(mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
  }
?>
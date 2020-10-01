<?php

$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","senior");

$sql = "DELETE FROM `rewards` where `id` = '$id'"; 
       mysqli_query($con, $sql);
     echo "<script>alert('Done Deleting  ')</script>";
       header("removeRew.php");       
       
 
?>

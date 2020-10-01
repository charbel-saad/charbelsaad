<?php

$ID=$_GET['ID'];
$con=mysqli_connect("localhost","root","","senior");

$sql = "DELETE FROM `user` where `ID` = '$ID'"; 
       mysqli_query($con, $sql);
       echo "<script>alert('Done Deleting  ')</script>";
header("ownerList.php");       
 
?>
<?php
$q=$_GET["q"];//get the q parameter from URL
//echo $q;
$con=mysqli_connect("localhost","root","","senior");
$r = mysqli_query($con, "SELECT  ID,userName,fname,lname,Email,Address,Phone FROM user where ID like'$q%' OR  userName like'$q%' OR fname like'$q%' OR lname like'$q%' OR Email  like'$q%' OR Address  like'$q%' OR Phone  like'$q%'" ) ;
echo "<TABLE border=4>";
 while($row = mysqli_fetch_array($r) ) {
      echo "<td>".$row['ID']." ".$row['userName']." ".$row['fname']." ".$row['lname']." ".$row['Email']." ".$row['Address']." ".$row['Phone']."</td>";
	  //echo $q;
 }  	
echo"<TABLE>";
 mysqli_close($con);
 
?>
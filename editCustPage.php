<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}





table {
  border-collapse: collapse;
  width:75%;
  
}
tr:nth-child(even) {background-color: #f2f2f2;}

table, th, td {
  border: 1px solid black;
  border-color:white;
  height:50px;
}
th{
    height:40px;
    
    background-color:black;
    color:white; 
    
}
a{
    text-decoration:none;
    color:black;
}
input {
  display: inline-block;
  
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  
  border: none;
  border-radius: 50px;
  
}
.b1{
    background-color: #01DF01;

	display: inline-block;
  
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  
  border: none;
  border-radius: 50px;
  

}
.b2{
    background-color: #FF0000;
}
.b1:hover {background-color: #3e8e41;}

.b2:hover {background-color: #8A0808;}

button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#name{
	color:black
}
#pass{
	color:black
}
#fname{
	color:black
}
#lname{
	color:black
}
#email{
	color:black
}
#address{
	color:black
}
#phone{
	color:black
}
.menu{
	margin-left:50px;
}
p{
margin-top:20px;	
}
#bt{
	background-color:black;
	margin-left:150px;
	margin-top:20px;
}
















</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Mike</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="senior.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h4>Dashboard</h4>
  </div>
  <div class="w3-bar-block">
    
  <a href="profileOwner.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-eye fa-fw"></i>  Overview</a>
    
    <a href="ownerCust.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Customers list</a>
    <a href="ow_rewards.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gift fa-fw"></i>  rewards</a>
    
    <a href="ed_ow_profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  edit Profile </a><br><br>
    <a href="editStore.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Your Store  </a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div class=menu>

<H1> update </H1>

<form method=post>
<label > ID :
    <?php

echo $_GET['ID'];
$ID=$_GET['ID'];

?>
</label>
</form>

 

<form method=post>
<?php

$con=mysqli_connect("localhost","root","","senior");

$result = mysqli_query($con,"SELECT ID,userName,password ,fname,lname,Email,Address,Phone  FROM user where ID='$ID' ");

while($row = mysqli_fetch_array($result)) {
    ?>
    <p > userName &nbsp <input type=text name="name" value="<?php echo $row['userName']?>" id="name"></p>
    <p> password  &nbsp&nbsp&nbsp<input type=password name="pass" value="<?php echo $row['password']?>" id=pass></p>
    <p> fname  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=text name="fname" value="<?php echo $row['fname']?>" id=fname></p>
    <p> lname   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name="lname" value="<?php echo $row['lname']?>" id=lname></p>
    <p> Email  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name="Email" value="<?php echo $row['Email']?>" id=email></p>
    <p> Address  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name="Address" value="<?php echo $row['Address']?>" id=address></p>
    <p> Phone  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name="Phone" value="<?php echo $row['Phone']?>" id=phone></p>
    <input type="submit" name="submit"  value=" UPDATE " id=bt>
    
    
<?php
}
mysqli_close($con);
?>


</form>


<?php
if (isset($_POST['submit'])) {
        $_SESSION['ID']=$ID;
        $_SESSION['name']=$_POST['name'];
		$_SESSION['pass']=$_POST['pass'];
        $_SESSION['fname']=$_POST['fname'];
        $_SESSION['lname']=$_POST['lname'];		
        $_SESSION['Email'] = $_POST['Email'];
        $_SESSION['Address'] = $_POST['Address'];
        $_SESSION['Phone']=$_POST['Phone'];
        $name=$_SESSION['name'];
        $pass=$_SESSION['pass'];
        $fname=$_SESSION['fname'];
        $lname=$_SESSION['lname'];
        $Email=$_SESSION['Email'];
        $Address=$_SESSION['Address'];
        $Phone=$_SESSION['Phone'];
		$con= mysqli_connect("localhost", "root","", "senior");
		$query="UPDATE  user SET  userName='$name' , password='$pass' , fname='$fname' ,lname='$lname' , Email='$Email' ,Address='$Address' ,Phone='$Phone'  WHERE ID='$ID'  ";
		$res =  mysqli_query($con,$query);
		if ($res ==1 ) //run the query
			echo "the  ".$_SESSION['name']." is succesfuly updated";
		else
			echo "the" .$_SESSION['name']. " doesn't exits";
		mysqli_close($con);
    }

?>

</div>


  

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>

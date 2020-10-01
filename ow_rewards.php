
<?php
session_start(); 
if (!isset($_SESSION['login_user'])){
	echo "You need to login";
	
}
$name=$_SESSION['login_user'];

?>



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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 220px;
  max-height:500px;
  margin-top: 50px;
  margin-bottom:20px;
  text-align: center;
  font-family: arial;
  background-color:white;
  margin-left:150px;
  border-radius:5px;
  float: left;
  background-color:#dde1e7;
  
}


.container {
  position: relative;
  width: 100%;
}

.image {
  opacity: 1;
  display: block;
 width:220px;
 height:300px;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 85%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  width:150px;
}



.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 15px;
  border-color: #4CAF50;
  
}
.overlay {
  
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #DDE1E7;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}
.container:hover .overlay {
  height: 100%;
}

.re_name {
  color: black;
  font-size: 20px;
  position: absolute;
  top: 30%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.re_cost {
  color: grey;
  font-size: 20px;
  position: absolute;
  top: 60%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.re_points {
  color: orange;
  font-size: 20px;
  position: absolute;
  top: 5%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  border:none;
  background-color:#dde1e7;
}


.ribbon {
  margin-left:120px;
  
  width: 50px;
  height: 50px;
  top: -15px;
  right: -20px;
  position: absolute;
  border-radius:50%;
  background: #FD2563;
  color: #333;
  font-family: arial;
  font-size: 15px;
  color:white;
  text-align: center;
  line-height: 50px;
  
}

.main-hr {
  width: 30%;
  border: none;
  border-top: 1px solid #c3c3c3;
}
.icon-btn {
  width: 50px;
  height: 50px;
  border: 1px solid #cdcdcd;
  background: white;
  border-radius: 25px;
  overflow: hidden;
  position: relative;
  transition: width 0.2s ease-in-out;
}
.add-btn:hover {
  width: 120px;
}
.add-btn::before,
.add-btn::after {
  transition: width 0.2s ease-in-out, border-radius 0.2s ease-in-out;
  content: "";
  position: absolute;
  height: 4px;
  width: 10px;
  top: calc(50% - 2px);
  background: red;
}
.add-btn::after {
  right: 14px;
  overflow: hidden;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}
.add-btn::before {
  left: 14px;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}
.icon-btn:focus {
  outline: none;
}
.btn-txt {
  opacity: 0;
  transition: opacity 0.2s;
}
.add-btn:hover::before,
.add-btn:hover::after {
  width: 4px;
  border-radius: 2px;
}
.add-btn:hover .btn-txt {
  opacity: 1;
}
.add-icon::after,
.add-icon::before {
  transition: all 0.2s ease-in-out;
  content: "";
  position: absolute;
  height: 20px;
  width: 2px;
  top: calc(50% - 10px);
  background: red;
  overflow: hidden;
}
.add-icon::before {
  left: 22px;
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}
.add-icon::after {
  right: 22px;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}
.add-btn:hover .add-icon::before {
  left: 15px;
  height: 4px;
  top: calc(50% - 2px);
}
.add-btn:hover .add-icon::after {
  right: 15px;
  height: 4px;
  top: calc(50% - 2px);
}



.points{
  background: rgb(246, 156, 85);
  width: 100px;
  height: 80px;
  position: relative;
  font-size:20px;
  text-align: center;
  -ms-transform: rotate(20deg);
  transform: rotate(20eg);
  left:100px;
  background-color:white;
  border:2px solid red;
  border-radius:100%;
  

}
#totalPts{
  margin-top:20%;
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
  

<div style="text-align: center; margin-top:30px;">
  
  <a href="new_ow_rew.php"><button class="icon-btn add-btn">
    <div class="add-icon"></div>
    <div class="btn-txt">Add</div>
  </button></a>
  <a href="remov_ow_rew.php"><button class="icon-btn add-btn">  
    <div class="btn-txt">Remove</div>
  </button></a>
 <div>


</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div>

<form method=post >
<?php  
    $con= mysqli_connect("localhost", "root","", "senior");
    $result = mysqli_query($con, "SELECT * FROM rewards  where userName='$name'");
   

    while ($row = mysqli_fetch_array($result)) {

      
      echo "<div class='card'>";
      echo"<div class='container'>";
        echo"<span class='ribbon'>".$row['sale']."% </span>";
        echo "<img src='rewards/".$row['img']." ' class='image' >";
        echo "<div class='overlay'>";
        echo" <div class='re_name' >".$row['Retitle']."</div>";
        echo "<div class='re_cost'><span style='text-decoration: line-through; font-size:15px;'>".$row['fromC']."$ </span><span>".$row['toC']."$</span></div>";
        echo" <input class='re_points'   value='".$row['pts'] ."' readonly='readonly'  />";
        echo" <div class='middle'>";
        echo "<button class='text'  value='".$row['pts']."' name='submit'><i class='fa fa-cart-plus fa-fw'></i> Buy </button>";
         
        
        echo"</div>";
        echo"</div>";
        echo"</div>";
        echo"</div>";
        
      
      
        
    }
    if (isset($_POST['submit'])) {
      $x=$_POST['submit'];
  
    $query="SELECT SUM(points) AS points_sum FROM points WHERE userName='$name' ";
    $res =  mysqli_query($con,$query);
    while($row = mysqli_fetch_array($res)) {
    
    
    if($row['points_sum'] >= $x){  
  
    $query="INSERT into points (userName,storeName,points)values('$name','rewards','-$x')";
    $res =  mysqli_query($con,$query);
    }else echo "<script> alert('you Don't have points ')</script>";
    
    }
  }
  
  
  
  mysqli_close($con);

    ?>
 



</form>
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

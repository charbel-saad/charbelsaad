<?php
session_start(); 
if (!isset($_SESSION['login_user'])){
	echo "You need to login";
	
}
$name=$_SESSION['login_user'];

$Sn=$_GET['name'];


?>


<html>

<meta charset="UTF-8">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}



.mySlides {display: none;}
img {vertical-align: middle;}
#img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  
  position: relative;
  margin: auto;
  box-shadow:-3px -3px 5px #ffffff60 , 3px 3px 15px #00000090 ;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}




/*------------------------------------------*/


.box{
    float:left;
    width:400px;
}
.box2{
    
    margin-left:480px;

}

#part2{
    width:500px;
    margin-top:50px;
    margin-left:350px;
    border:5px solid black;
    border-radius:20px;
}
#inside-part2{
    margin-left:100px;
    margin-top:20px;
}


.card{
    display:flex;
    justify-content:center;
    max-width:300px;
    max-height:300px;
    flex-direction:column;
    float: left;
    margin:100px;
    margin-top:10px;
    transition:top ease 0.2s;
    position:relative;
    top:0px;

}
.neu{
    margin-top:50px;
    margin-left:50px;
    height:400px;
    width:400px;
    border-radius:20px;
    background: #dde1e7;
    box-shadow:-3px -3px 5px #ffffff60 , 3px 3px 15px #00000090 ;
    
}
#part1{
    width:100%;
    margin-left:250px;
    margin-top:50px;
    float:left;

}
.info{
  float:left;
  font-size:20px;
  color:grey;
  
}
#bt{
    margin-left:110px;
    margin-top:10px;
    width:130px;
    background-color:#626567;
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
  color:black;
  
}

#file1{
    border:1px solid black;
    background-color:white;
width:250px;


}

#bt1{
    background-color:red;
    border-color:red;
    width:150px;
 height:40px;
 color:white;
 font-size:15px;
 border-radius:5px;
margin-left:50px;
margin-top:10px;
}
#bt2{
    background-color:green;
    border-color:green;
    width:150px;
 height:40px;
 color:white;
 font-size:15px;
 border-radius:5px;
margin-left:50px;
margin-top:10px;

}
#bt3{
    background-color:purple;
    border-color:purple;
    width:150px;
 height:40px;
 color:white;
 font-size:15px;
 border-radius:5px;
margin-left:50px;
margin-top:10px;
}
#bt4{
    background-color:#0E93EB;
    border-color:#0E93EB;
    width:150px;
 height:40px;
 color:white;
 font-size:20px;
 border-radius:5px;
margin-left:50px;
margin-top:10px;

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
      <span>Welcome, <strong><?php echo $_SESSION['login_user'] ?></strong></span><br>
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


  <!-- Header -->
  

    <div class="w3-row-padding w3-margin-bottom">
  
    <div class="slideshow-container">

    <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <div id=img><?php 
  
  $db = mysqli_connect("localhost", "root", "", "senior");
  $result = mysqli_query($db, "SELECT * FROM store where userName='$name' ");
  while ($row = mysqli_fetch_array($result)) {
    
        echo "<img src='rewards/".$row['slideImg1']."' style='width:100%;height:500px;'";
       
    echo "</div>";
  }
    
  ?></div>
  <div class="text">Caption One</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <div id=img><?php 
  
  $db = mysqli_connect("localhost", "root", "", "senior");
  $result = mysqli_query($db, "SELECT * FROM store where userName='$name' ");
  while ($row = mysqli_fetch_array($result)) {
    
        echo "<img src='rewards/".$row['slideImg2']."' style='width:100%;height:500px;'";
       
    echo "</div>";
  }
    
  ?></div>
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <div id=img><?php 
  
  $db = mysqli_connect("localhost", "root", "", "senior");
  $result = mysqli_query($db, "SELECT * FROM store where userName='$name' ");
  while ($row = mysqli_fetch_array($result)) {
    
        echo "<img src='rewards/".$row['slideImg3']."' style='width:100%;height:500px;'";
       
    echo "</div>";
  }
    
  ?></div>
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
  

<div class=box>
  <p id=imgBox>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "senior");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
      $image = $_FILES['image']['name'];
      
  	// Get text
  	

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "UPDATE store SET slideImg1='$image' WHERE userName='$name'";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

  

  ?>
  <form method="POST"   action="editStore.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image"  id="file1" style="color:black">
  	</div>
  	
  	<div>
  		<button type="submit"  class="	fa fa-cloud-upload fa-fw"  name="upload" id=bt1 > Replace image  1 </button>
         
  	</div>

  </form>
</p>

</div>
<div class=box>
<p id=imgBox>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "senior");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload2'])) {
  	// Get image name
      $image = $_FILES['image']['name'];
      
  	// Get text
  	

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "UPDATE store SET slideImg2='$image' WHERE userName='$name'";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

  

  ?>
  <form method="POST"   action="editStore.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file"  id="file1" name="image" style="color:black">
  	</div>
  	
  	<div>
  		<button type="submit" class="	fa fa-cloud-upload fa-fw"   name="upload2" id=bt2> Replace image  2 </button>
         
  	</div>

  </form>
</p>
</div>


<div class=box>
<p id=imgBox>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "senior");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload3'])) {
  	// Get image name
      $image = $_FILES['image']['name'];
      
  	// Get text
  	

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "UPDATE store SET slideImg3='$image' WHERE userName='$name'";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

  

  ?>
  <form method="POST"   action="editStore.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file"  id="file1" name="image" style="color:black">
  	</div>
  	
  	<div>
  		<button type="submit"  class="	fa fa-cloud-upload fa-fw"   name="upload3" id=bt3> Replace image  3 </button>
         
  	</div>

  </form>
</p>


</div>

<div id=part1>


<?php  
    $con= mysqli_connect("localhost", "root","", "senior");
    $result = mysqli_query($con, "SELECT * FROM store   WHERE userName='$name' ");

    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='card'>";
      echo"<div class='neu'>";
      
        echo "<a href='mainPage.php?name=".$row['name']."'><div ><img src='rewards/".$row['pp']."' style=' height:200px ;width:400px; ' ></div><a>";
        echo"<p class='info' style=' width:200px; '>  ".$row['name']." </p>";
        $SN=$row['name'];
        
        
        echo "</div>";
        echo"</div>";
        
    }
    
    
    ?>


</div>





<div class=box2>
  <p id=imgBox2>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "senior");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['change'])) {
  	// Get image name
      $image = $_FILES['image']['name'];
      
  	// Get text
  	

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "UPDATE store SET pp='$image' WHERE userName='$name'";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

  

  ?>
  <form method="POST"   action="editStore.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image"  id="file1" style="color:black">
  	</div>
  	
  	<div>
      <button type="change" class="	fa fa-cloud-upload fa-fw" id="bt4" name="change"> UPLOAD </button>
         
  	</div>

  </form>
</p>

</div>



<!-- ------------------------ --->

<div id='part2'>
<div id="inside-part2">
<h1> Store Informations </h1>
<form method=post>
<?php
$name=$_SESSION['login_user'];
$con=mysqli_connect("localhost","root","","senior");

$result = mysqli_query($con,"SELECT ID,name,userName ,address,phone,fromCash,toPoints   FROM store where userName='$name' ");

while($row = mysqli_fetch_array($result)) {
    ?>
    <p > ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=text name="id" value="<?php echo $row['ID']?>" id="ID" reaonly=readonly></p>
    <p > Store Name &nbsp <input type=text name="Sname" value="<?php echo $row['name']?>" id="ID"></p>
    <p > userName &nbsp &nbsp&nbsp&nbsp<input type=text name="name" value="<?php echo $row['userName']?>" id="name"></p>
    <p> Address &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp<input type=text name="Address" value="<?php echo $row['address']?>" id=address></p>
    <p> phone  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=text name="phone" value="<?php echo $row['phone']?>" id=phone></p>
    <p> fromCash   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name="fromCash" value="<?php echo $row['fromCash']?>" id=lname></p>
    <p> toPoints  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=text name="toPoints" value="<?php echo $row['toPoints']?>" id=email></p>
    
    <input type="submit" name="sub"  value=" change " id=bt>
    
    
<?php
}
mysqli_close($con);
?>


</form>


<?php
if (isset($_POST['sub'])) {
         $_SESSION['id']=$_POST['id'];
        $_SESSION['Sname']=$_POST['Sname'];;
        $_SESSION['userName']=$_POST['name'];
		$_SESSION['fromCash']=$_POST['fromCash'];
        $_SESSION['toPoints']=$_POST['toPoints'];
        $_SESSION['Address'] = $_POST['Address'];
        $_SESSION['phone']=$_POST['phone'];
        $id=$_SESSION['id'];
        $name=$_SESSION['userName'];
        $Sname=$_SESSION['Sname'];
        $fromCash=$_SESSION['fromCash'];
        $toPoints=$_SESSION['toPoints'];
        $Address=$_SESSION['Address'];
        $phone=$_SESSION['phone'];
		$con= mysqli_connect("localhost", "root","", "senior");
		$query="UPDATE  store SET  userName='$name' , name='$Sname' , fromCash='$fromCash' ,toPoints='$toPoints' ,Address='$Address' ,phone='$phone'  WHERE ID='$id'  ";
		$res =  mysqli_query($con,$query);
		if ($res ==1 ) //run the query
			echo "the  ".$_SESSION['Sname']." is succesfuly updated";
		else
			echo "the" .$_SESSION['Sname']. " doesn't exits";
		mysqli_close($con);
    }

?>


</div>


</div>














  <!--------- -->
    </div>
    
 
        
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




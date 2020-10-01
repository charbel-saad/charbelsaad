
<?php
session_start(); 
if (!isset($_SESSION['login_user'])){
	echo "You need to login";
	
}
$n=$_SESSION['login_user'];

?>


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


#totalPoints{
margin-right:500px;  
margin-top:50px;

border : 0.5em solid black;
border-color:red;
text-align:center;
font-size:20px;
width  : 6em;
height : 6em;
border-radius: 100%;
}

#part1{
  width:50%;
  float:left;
}
#sp_pts{
  margin-top:10px;
  font-size:50px;
}

#imgBox{
    width:250px;
    height:50px;
    margin-top:20px;
    margin-bottom:20px;
    border-radius:20px;
    
}


/*----------------------------------*/















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
      <span>Welcome, <strong><?php echo $_SESSION['login_user']?></strong></span><br>
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
    <a href="rewardsPage.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gift fa-fw"></i>  rewards</a>
    
    <a href="ed_ow_profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  edit Profile </a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div class=menu>

    


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
      $imgName=$_POST['imgName'];
  	// Get text
  	

  	// image file directory
  	$target = "rewards/".basename($image);

  	$sql = "INSERT INTO rewards (userName,imgName, img) VALUES ('$n','$imgName', '$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

  if (isset($_POST['delete'])) {
    
    $sql = "DELETE  FROM rewards WHERE imgName='$imgName' ";
    // execute query
    mysqli_query($db, $sql);

}



  $result = mysqli_query($db, "SELECT * FROM rewards where userName='$n' ");

    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img' >";
      	echo "<img src='rewards/".$row['img']."' height='250px'>";
          echo "<p>".$row['userName']."</p>";
          
          
      echo "</div>";
    }
  ?>
  <form method="POST"   action="uploadImage.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image" style="color:black">
  	</div>
  	<div>
      <input type="text" name="imgName" style="color:black">
  	</div>
  	<div>
  		<button type="submit" name="upload">ADD to rewards</button>
          
          <button type="submit" name="delete">  delete r1</button>
  	</div>

  </form>
</p>
<!--  /////////////////////////////////// -->
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
  	$target = "rewards/".basename($image);

  	$sql = "INSERT INTO rewards (userName,imgName, img) VALUES ('$n','r2', '$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }

  if (isset($_POST['delete2'])) {
    
    $sql = "DELETE  FROM rewards WHERE imgName='r2' ";
    // execute query
    mysqli_query($db, $sql);

}



  $result = mysqli_query($db, "SELECT * FROM rewards where imgName='r2' ");

    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='card' >";
      echo "<div class='neu' >";
      	echo "<img src='rewards/".$row['img']."' id='image'>";
          echo "<p class='re_name'>".$row['userName']."</p>";
          
          echo "</div>"; 
      echo "</div>";
    }
  ?>
  <form method="POST"   action="uploadImage.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image" style="color:black">
  	</div>
  	<div>
      <input type="text" value="r2" style="color:black">
  	</div>
  	<div>
  		<button type="submit" name="upload2">POST to r2</button>
          
          <button type="submit" name="delete2">  delete r2</button>
  	</div>

  </form>
</p>
<!-- /////////////////////////////////////////// --> 
<p id=imgBox>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "senior");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['up'])) {
  	// Get image name
      $image = $_FILES['image']['name'];
      
  	// Get text
  	

  	// image file directory
  	$target = "rewards/".basename($image);

  	$sql = "INSERT INTO rewards (userName,imgName, img) VALUES ('$n','r3', '$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }


  if (isset($_POST['delete3'])) {
    
    $sql = "DELETE  FROM rewards WHERE imgName='r3' ";
    // execute query
    mysqli_query($db, $sql);

}


  $result = mysqli_query($db, "SELECT * FROM rewards where imgName='r3' ");

    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img' >";
      	echo "<img src='rewards/".$row['img']."' height='250px' >";
          echo "<p>".$row['userName']."</p>";
          
          
      echo "</div>";
    }
  ?>
  <form method="POST"   action="uploadImage.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image" style="color:black">
  	</div>
  	<div>
      <input type="text" value="r3" style="color:black">
  	</div>
  	<div>
  		<button type="submit" name="up">POST</button>
          <button type="submit" name="delete3">  delete r3</button>
  	</div>
  </form>
</p>


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

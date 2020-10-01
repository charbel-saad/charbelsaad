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
#img {vertical-align: middle;}

.mySlides {display: none;}
img {vertical-align: middle;}

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
.card:hover{
  top:-8px;
}

.re_name{
margin-left:15px;
font-size:20px;

}
input{
    border:none;
    width:300px;
    background:#dde1e7;
    text-align:center;
    margin-bottom:5px;
    color:grey;
}


.ribbon {
  
  position:absolute;
  width: 60px;
  height: 50px;
  margin-left:260px;
  position: absolute;
  border-radius:40px;
  background: #FD2563;
  color: #333;
  font-family: arial;
  font-size: 15px;
  color:white;
  text-align: center;
  line-height: 50px;
  
  
}
.comment1{
    width:380px;
    height:170px;
    background-color:#FD5F3E;
    margin-right:20px;
    margin-top:20px;
    float:left;
   animation: popup 0.5s;

}
@keyframes popup {
  
  0%{
    transform: scale(1);
  }
  50%{
    transform: scale(1.1);
  }
  60%{
    transform: scale(1.1);
  }
  70%{
    transform: scale(1.1);
  }
  80%{
    transform: scale(1);
  }
  90%{
    transform: scale(1);
  }
  100%{
    transform: scale(1);
  }
  
}

.comment2{
    width:380px;
    height:170px;
    background-color:#FD5F3E ;
    margin-left:200px;
    margin-right:20px;
    float:left;
    margin-top:20px;
    animation: popup 0.5s;

}
.cmnt_user{
    margin-top:-85px;
    margin-left:120px;
    font-size:20px;
}
.cmnt_date{
    margin-top:-25px;
    margin-left:290px;
    font-size:16px;

}
.cmnt_body{
    margin-top:30px;
margin-left:130px;
color:white;
font-size:16px;
}
.info_box{
  margin:35px;
    width:95%;
    height:550px;
    border-top-style:solid;
    
    border-top-color:black;
    
    float:left;
    margin-top:50px;
    
    
    

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
  left:50px;
  background-color:white;
  border:2px solid red;
  border-radius:100%;

}
#totalPts{
  margin-top:20%;
}




.about{
  width:200px;
  font-weight:bold;
  font-size:20px;
  text-align:center;

}
.about_content{
max-width:200px;
max-height:300px;
font-variant: small-caps;

}
.cmnt{
  margin-top:10px;
  width:200px;
  height:80px;
  background-color: #d0e2bc;
}
#send{
  margin-top:10px;
  width:50px;
  height:20px;
  
 
}
.contact{
 
  
  max-width:200px;
max-height:300px;
font-variant: small-caps;

}
.part1{
  float:left;
  margin-left:100px;
}
.part2{
  float:left;
  margin-left:150px;
}
.part3{
  float:left;
  margin-left:150px;
}
.part2 i{
  color:#FF6847;
}
.btn{
  width:40px;
  height:50px;
  background-color:#B2BABB;
  border-radius:20px;
  margin:10px;
  
  
}
.btn:hover {background-color: #6D7070}




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
      <a href="chatPage.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="senior.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h4>Dashboard</h4>
  </div>
  <div class="w3-bar-block">
    
  <a href="profileUser.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-home fa-fw"></i>  Home</a>
  <a href="cust_rewards.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gift fa-fw"></i>  rewards</a>
    
    <a href="ed_user_profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  edit Profile </a><br><br>
  </div>
  
  <div class='points'><div id='totalPts'> <?php 
$con= mysqli_connect("localhost", "root","", "senior");
$query="SELECT SUM(points) AS points_sum FROM points WHERE userName='$name' AND storeName='$Sn' ";
$res =  mysqli_query($con,$query);

while($row = mysqli_fetch_array($res)) {

  echo "" . $row['points_sum'] . "";
}


mysqli_close($con);
 

?></div></div>
 
  
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
  $result = mysqli_query($db, "SELECT * FROM store where name='$Sn' ");
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
  $result = mysqli_query($db, "SELECT * FROM store where name='$Sn' ");
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
  $result = mysqli_query($db, "SELECT * FROM store WHERE name='$Sn' ");
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
  <?php 
  $con= mysqli_connect("localhost", "root","", "senior");
    $result = mysqli_query($con, "SELECT * FROM comment WHERE storeName='$Sn'  ");

    while ($row = mysqli_fetch_array($result)) {
      echo"<div class='comment1'>";
      echo"<div class='cmnt_box'>";   
      echo"<div><img src='avatar.png' style='height:100px;width:100px;'></div>";   
      echo"<div class='cmnt_user'>".$row['userName']."</div>";
      echo"<div class='cmnt_date'>".$row['date']."</div>";
      echo"<div class='cmnt_body'><p>".$row['comment']."</p></div>";
      echo"</div>";
      echo"</div>";

    }
    ?>
    


<!-- ---------->



<!-- ---------->


<!-------------------------------- -->
<div class="info_box">

   <div class="part1"> 
    <div class="about">About </div>
<div class="about_content"> iusmod tempor incididunt ut labore
 et dolore magna aliqua. Ut enim ad minim veniam, quis 
 nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
 
 commodo consequat. Duis aute irure dolor in reprehenderit in
  voluptate velit esse cillum dolore eu fugiat nulla pariatur.
   Lorem ipsum dolor sit amet conse ctetur adipisicing eli 
    </div>
  
</div>
<div class="part2">
<div class="about"> Contact us</div>
<p><i class="fa fa-home"></i> <?php    
echo "$Sn";

?></p>
<p><i class="fa fa-map-marker"></i> <?php  

$con= mysqli_connect("localhost", "root","", "senior");
$query="SELECT * FROM store WHERE  name='$Sn' LIMIT 3 ";
$res =  mysqli_query($con,$query);

while($row = mysqli_fetch_array($res)) {

  echo "" . $row['address'] . "";
}


mysqli_close($con);


?></p>
<p ><i class="fa fa-phone"></i> <?php  

$con= mysqli_connect("localhost", "root","", "senior");
$query="SELECT * FROM store WHERE  name='$Sn' ";
$res =  mysqli_query($con,$query);

while($row = mysqli_fetch_array($res)) {

  echo "" . $row['phone'] . "";
}


mysqli_close($con);


?> </p>

<div class="about" style="margin-top:10px;"> Follow Us  </div>
<button class="btn"><i class="fa fa-facebook"></i> </button>
<button class="btn"><i class="fa fa-twitter"></i> </button>
<button class="btn"><i class="fa fa-youtube"></i> </button>


</div>
<FORM  METHOD=post>
<div class="part3">
<div class="about" style="margin-top:10px;"> Comment  </div>
  <textarea  class="cmnt"  name="cmnt"  placeholder=" Type your comment here "></textarea>
  <br>
  <input type="submit" name="add" value="Add " id="send">


</div>

</div>
</FORM>
<!---------------------------- -->
<?php 
if (isset($_POST['add'])) {
  if($_POST["cmnt"]){
    $cmnt=$_POST['cmnt'];

    $servername="localhost";
    $username="root";
    $conn=  mysqli_connect($servername,$username,"","senior")or die(mysql_error());
    $date=date("Y-m-d H:i:s");
    $sql="INSERT into comment (userName,storeName,comment,date)values('$name','$Sn','$cmnt','$date')";
    $result=mysqli_query($conn,$sql) ;
    		
    echo "<script>alert('Comment is sent  ')</script>";

  }else echo "<script>alert('Comment is empty  ')</script>";
}





?>






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




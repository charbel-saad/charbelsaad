<?php
session_start(); 
if (!isset($_SESSION['login_user'])){
	echo "You need to login";
	
}
$name=$_SESSION['login_user'];

?>


<html>

<meta charset="UTF-8">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}





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
button{
    width:120px;
    height:40px;
    margin-left:90px;
    border-radius:20px;
    background:white;
    color:#9CC2FB;
    font-size:20px;
}
.info{
  float:left;
  font-size:20px;
  color:grey;
  
}

.ribbon {
  
  position:absolute;
  width: 70px;
  height: 70px;
  margin-left:130px;
  
  border-radius:0px 0px 20px 0px;
  background: #FD2563;
  color: #333;
  font-family: arial;
  font-size: 25px;
  color:white;
  text-align: center;
  line-height: 60px;

  
}
.content {
  
  border-radius:10px;
  width: 900px;
  height: 420px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left:160px;
}
.bg_img{
  height:100%;
  width:100%;
  background-image: url('bg2.jpg');
  background-size: 100% 100%;
  filter:blur(4px);
  display: flex;
}
.slider-wrapper {
  font-size: 40px;
  color:#B899C5;
  font-weight: bold;
  text-transform: uppercase;
  display: flex;
  align-items: center;
  justify-content: center;
 
  position: absolute;
  
  
}
.slider{
  height: 50px;
  padding-left:15px;
  overflow: hidden;
  text-align:center;
  

}
.slider div {
  color:#fff;
  height: 50px;
  margin-bottom: 50px;
  padding: 2px 15px;
  text-align: center;
  box-sizing: border-box;
}
.slider-text1 {
  background: lightgreen;
  animation: slide 5s linear infinite;
}
.slider-text2 {
  background: skyblue;
}
.slider-text3 {
  background: lightcoral;
}
@keyframes slide {
  0% {margin-top:-300px;}
  5% {margin-top:-200px;}
  33% {margin-top:-200px;}
  38% {margin-top:-100px;}
  66% {margin-top:-100px;}
  71% {margin-top:0px;}
  100% {margin-top:0px;}
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
      <a href="cust_notification.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="cust_chatPage.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
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
$query="SELECT SUM(points) AS points_sum FROM points WHERE userName='$name' ";
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
  
    <div class="content">
    <div class=bg_img><img src="gVouchers.jpg" ></div>
        <div class="slider-wrapper">
          I can win
          <div class="slider">
              <div class="slider-text1">AWARDS</div>
              <div class="slider-text2">POINTS</div>
              <div class="slider-text3">VOUCHERS </div>
          </div>
        </div>    
           
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
    $result = mysqli_query($con, "SELECT * FROM store  ");

    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='card'>";
      echo"<div class='neu'>";
      
        echo "<a href='mainPage.php?name=".$row['name']."'><div ><img src='rewards/".$row['pp']."' style=' height:200px ;width:400px; ' ></div><a>";
        echo"<p class='info' style=' width:200px; '>  ".$row['name']." </p>";
        $SN=$row['name'];
        echo"<span class='ribbon'>"?><?php
        $conn= mysqli_connect("localhost", "root","", "senior");
        $query="SELECT SUM(points) AS points_sum ,storeName FROM points WHERE userName='$name' and storeName='$SN' ";
        $res =  mysqli_query($conn,$query);
        

        while($row = mysqli_fetch_array($res)) {
           
        echo "" . $row['points_sum'] . "";
        }
        
        mysqli_close($conn);
        
        
        "</span>"?>
        <?php 
        echo "</div>";
        echo"</div>";
        
    }
    
    
    ?>






    
   
 


  
  
  
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

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
  margin-bottom:10px;
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
}


.ribbon {
  margin-left:120px;
  
  width: 60px;
  height: 50px;
  top: -15px;
  right: -20px;
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
    
    <a href="profileOwner.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Overview</a>
    
    <a href="ownerCust.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Customers list</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gift fa-fw"></i>  rewards</a>
    <a href="ed_ow_profile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Edit profile</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div>
<div class="card">
<div class="container">
<span class="ribbon">-70%</span>
  <img src="pool.jpg"  class="image">
  <div class="overlay">
  <div class="re_name" >Helloooooo hellooo helloo </div>
  <div class="re_cost" ><span style="text-decoration: line-through; font-size:15px;">$100 </span><span>$50</span></div>
    <div class="re_points">100Pts</div>
    <div class="middle">
    <button class="text"><i class="fa fa-cart-plus fa-fw"></i>Add to Cart </button>
  </div>
  </div>
  
</div>

</div>

<div class="card">
<div class="container">
<span class="ribbon">-70%</span>
  <img src="weight.png"  class="image">
  <div class="overlay">
  <div class="re_name">Helloooooo</div>
  <div class="re_cost"><span style="text-decoration: line-through;">100 </span> 50</div>
    <div class="re_points">100Pts</div>
    <div class="middle">
    <button class="text"><i class="fa fa-cart-plus fa-fw"></i>Add to Cart </button>
  </div>
  </div>
</div>

</div>

<div class="card">
<div class="container">
<span class="ribbon">-70%</span>
  <img src="desert.jpg"  class="image">
  <div class="overlay">
  <div class="re_name">Helloooooo</div>
  <div class="re_cost"><span style="text-decoration: line-through;">100 </span> 50</div>
    <div class="re_points">100Pts</div>
    <div class="middle">
    <button class="text"><i class="fa fa-cart-plus fa-fw"></i>Add to Cart </button>
  </div>
  </div>
</div>
  
</div>

<div class="card">
<div class="container">
<span class="ribbon">-70%</span>
  <img src="spa.jpeg"  class="image">
  <div class="overlay">
  <div class="re_name">Helloooooo</div>
  <div class="re_cost"><span style="text-decoration: line-through;">100 </span> 50</div>
    <div class="re_points">100Pts</div>
    <div class="middle">
    <button class="text"><i class="fa fa-cart-plus fa-fw"></i>Add to Cart </button>
  </div>
  </div>
</div>
  
</div>
<div class="card">
<div class="container">
<span class="ribbon">-70%</span>
  <img src="makeup.jpg"  class="image">
  <div class="overlay">
  <div class="re_name">Helloooooo</div>
  <div class="re_cost"><span style="text-decoration: line-through;">100 </span> 50</div>
    <div class="re_points">100Pts</div>
    <div class="middle">
    <button class="text"><i class="fa fa-cart-plus fa-fw"></i>Add to Cart </button>
  </div>
  </div>
</div>
  
</div>
<div class="card">
<div class="container">
<span class="ribbon">-70%</span>
  <img src="sweet.jpg"  class="image">
  <div class="overlay">
  <div class="re_name">Helloooooo</div>
  <div class="re_cost"><span style="text-decoration: line-through;">100 </span> 50</div>
    <div class="re_points">100Pts</div>
    <div class="middle">
    <button class="text"><i class="fa fa-cart-plus fa-fw"></i>Add to Cart </button>
  </div>
  </div>
</div>
  
</div>

<div class="card">
<div class="container">
<span class="ribbon">-70%</span>
  <img src="phone.jpg"  class="image">
  <div class="overlay">
  <div class="re_name">Helloooooo</div>
  <div class="re_cost"><span style="text-decoration: line-through;">100 </span> 50</div>
    <div class="re_points">100Pts</div>
    <div class="middle">
    <button class="text"><i class="fa fa-cart-plus fa-fw"></i>Add to Cart </button>
  </div>
  </div>
</div>
  
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

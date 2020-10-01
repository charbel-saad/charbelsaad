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

#customer {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  background-color:white;
  width: 100%;
}



#customer td, #customer th{
  
  padding: 8px;

}
#customer td:nth-child(even){background-color: #f2f2f2;}




#pts1{
  margin-left:250px;
}
.cmnt{
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
      <span>Welcome, <strong><?php echo $_SESSION['login_user'] ?></strong></span><br>
      <a href="ow_notification.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="ow_chatPage.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
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
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
        <h3><?php
                    $con=mysqli_connect("localhost","root","","senior");
                    $sql = "SELECT * FROM chat WHERE to_userName='$name' AND chat_status='0'";
                    $result=mysqli_query($con, $sql);
                    $nbr=mysqli_num_rows($result);
                    echo "".$nbr."";


                
                    mysqli_close($con);
                    
                    ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Messages</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php
                    $con=mysqli_connect("localhost","root","","senior");
                    $sql = "SELECT * FROM store WHERE userName='$name' ";
                    $result=mysqli_query($con, $sql);
                    $nbr=mysqli_num_rows($result);
                    echo "".$nbr."";
                
                
                    mysqli_close($con);
                    
                    ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>store</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shares</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php
                    $con=mysqli_connect("localhost","root","","senior");
                    $sql = "SELECT * FROM user WHERE roleID='3'";
                    $result=mysqli_query($con, $sql);
                    $nbr=mysqli_num_rows($result);
                    echo "".$nbr."";
                
                
                    mysqli_close($con);
                    
                    ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>

  
  
  <hr>
  <div class="w3-container">
    <h5>Recent Users</h5>
    <ul class="w3-ul w3-card-4 w3-white">
    <?php
  $con=mysqli_connect("localhost","root","","senior");

$result = mysqli_query($con,"SELECT userName  FROM user  ORDER BY RAND() LIMIT 3 ");

while($row = mysqli_fetch_array($result)) {
  ?>
      <li class="w3-padding-16">
        <img src="avatar.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">
        <?php
	echo "<tr align='center'>";
  echo "<td>" . $row['userName'] . "</td>";
}
mysqli_close($con);
?>
    </ul>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Recent Comments</h5>
    <div class="w3-row">
    <?php 
$con= mysqli_connect("localhost", "root","", "senior");
$query="SELECT * FROM comment   WHERE  storeName='ownerStore'  limit 1    ";
$res =  mysqli_query($con,$query);

while($row = mysqli_fetch_array($res)) {
  echo"<div class=cmnt>";
  
  echo " <img class='w3-circle' src='avatar2.png' style='width:96px;height:96px;float:left;margin-left:10px;'>";
  
  echo"<div class='w3-col m10 w3-container'>";
  echo"<h4>".$row['userName']."<span class='w3-opacity w3-medium'>".$row['date']."</span></h4>";
  echo"<p>".$row['comment']."</p>";
  echo"</div>";
  echo"</div>";
}

mysqli_close($con);
 

?>
    </div>

    
   
  </div>
  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Demographic</h5>
        <p>Language</p>
        <p>Country</p>
        <p>City</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">System</h5>
        <p>Browser</p>
        <p>OS</p>
        <p>More</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Target</h5>
        <p>Users</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
 

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

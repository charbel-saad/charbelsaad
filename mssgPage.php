<?php
session_start(); 
if (!isset($_SESSION['login_user'])){
  echo "You need to login";
  header("Location: senior.php");
	
}
$n=$_SESSION['login_user'];

?>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

.chat{
width:800px;
height:70px;
border: 2px solid #A09F9F;
margin-left:250px;
background-color:white;
text-align:center;
color:red;
}
.chat_box{
    float:left;
    width:800px;
    height:400px;
    background-color:white;
    margin-top:50px;
    margin-left:250px;
    border: 2px solid #A09F9F;
    overflow-x: hidden; 
    overflow-x: auto;
}
.mssg_box{
    float:left;
    width:800px;
    height:50px;
    background-color:white;
    margin-top:10px;
    margin-left:250px;
    border: 2px solid #A09F9F;

}
#message{
    width:90%;
    height:100%;
}
#bt{
    width:79px;
    height:100%;
    background-color:green;
    border-color:green;
    font-size:20px;
}
#conv{
    max-width:500px;
    max-height:100px;
    background-color:#dedede;
    color:black;
    font-size:14px;
    margin-bottom:5px;
    margin-left:10px;
    border-radius:15px;

}
#conv_img{
    float:left;

}
#conv_name{
    font-style:italic;
    font-size:15px;
    color:#A09F9F;
}
#conv_text{
    font-size:13px;
    
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
      <a href="notificationPage.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="senior.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h4>Dashboard</h4>
  </div>
  <div class="w3-bar-block">
    
    <a href="home.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="ownerList.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Owners list</a>
    <a href="customerList.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Customers list</a>
    <a href="rewardsPage.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gift fa-fw"></i>  rewards</a>
    <a href="editProfile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  edit profile</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<form method=post>
    <?php


$toName=$_GET['userName'];

?>
</label>
</form>

<div id=menu>

<div class="chat"> <h2>Chat Room  </h2></div>
<div class="chat_box">
<?php
$db = mysqli_connect("localhost", "root", "", "senior");
$result = mysqli_query($db, "SELECT * FROM chat WHERE ( from_userName='$n' OR from_userName='$toName' ) AND( to_userName='$n' OR to_userName='$toName') ORDER BY chat_id  ");
while ($row = mysqli_fetch_array($result)) {
 echo "<div id='conv' >";
    echo "<div id='conv_img' >";
        echo "<img src='avatar.png' height='50px'>";   
    echo "</div>";
    echo "<div id='conv_name' >";
        echo "<p>".$row['from_userName']."</p>";
    echo "</div>";
    echo "<div id='conv_text' >";
        echo "<p>".$row['chat_mssg']."</p>";
    echo "</div>";
 echo "</div>";




  }




?></div>
<form method="POST">
<div class="mssg_box"><input type="text" name="messages" placeholder="Enter your message here ...." id="message"><input type="submit" name="submit"  value=" send " id=bt onClick="ManualRefresh();">  </div>
</form>
<?php 
if (isset($_POST['submit'])) {
    if($_POST["messages"] ){
        $message=$_POST["messages"];
        $db = mysqli_connect("localhost", "root", "", "senior");
        $sql = "INSERT INTO chat (to_userName,from_userName, chat_mssg) VALUES ('$toName','$n', '$message')";
        // execute query
        mysqli_query($db, $sql);
            
        }
        else print "Enter a message first  ";
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

setInterval(function() {
        window.location.reload();
    }, 10000); 

    function ManualRefresh(){
        window.location.reload();
    }


}
</script>


</body>
</html>


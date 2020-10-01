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

.not_box{

 border:2px solid #382191;
  width:700px;
  height:700px;
  margin-left:22%;
  background-color:white;
  overflow-x: hidden; 
    overflow-x: auto;

}
#title{
  width:100%;
  height:50px;
  background-color:#382191;
  color:white;
  font-size:22px;
  font-weight:bold;
  text-align:left;
  
}



#conv{
    margin-top:50px;
    float:left;
    width:650px;
    height:150px;
    background-color:  ;
    color:black;
    font-size:14px;
    margin-bottom:5px;
    
    border:2px solid #382191;
    margin-left:25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
#bt{
    width:80px;
    height:40px;
    float:right;
    background-color:#F7E809 ;
    border-color:#F7E809 ;
    font-weight:bold;
    font-size:18px;
    color:white;
    

}
#conv_img{
    float:left;
    margin-left:10px;
    margin-top:10px;

}
#conv_name{
    
    font-style:italic;
    font-size:15px;
    color:#A09F9F;
    margin-left:85px;
}
#conv_text{
    margin-left:100px;
    font-size:13px;
    height:100px;
    font-size:20px;
    
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


<div id=menu>
<div class="not_box">
<div id=title>  My notification  </div>
<form method="POST">

<?php
$db = mysqli_connect("localhost", "root", "", "senior");
$result = mysqli_query($db, "SELECT * FROM chat WHERE ( to_userName='$n') AND(chat_status='0') ORDER BY chat_id  ");
while ($row = mysqli_fetch_array($result)) {
 echo "<div id='conv' >";
    echo "<div id='conv_img' >";
        echo "<img src='avatar.png' height='70px'>";   
    echo "</div>";
    echo "<div id='conv_name' >";
        echo "<p>".$row['from_userName']."</p>";
    echo "</div>";
    echo "<div id='conv_text' >";
        echo "<p>".$row['chat_mssg']."</p> ";?>
        <input type="hidden" name="idd" value="<?php echo  $row['chat_id'] ?>" readonly="readonly" id="id">
        <button  value="<?php echo  $row['chat_id'] ?>"  id='bt' name='submit' >READ</button>
   <?php echo "</div>";
    
 echo "</div>";


  }
  if (isset($_POST['submit'])) {
    $idd=$_POST['submit'];
        $db = mysqli_connect("localhost", "root", "", "senior");
        $sql = "UPDATE  chat SET chat_status='1' WHERE chat_id='$idd'";
        // execute query
        mysqli_query($db, $sql);
            
        }
        


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

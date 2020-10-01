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






.image-preview{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 220px;
  height:300px;
  margin-top: 50px;
  margin-bottom:10px;
  text-align: center;
  font-family: arial;
  background-color:white;
  margin-left:480px;
  border-radius:5px;
  border:2px solid #dde1e7;
  
  background-color:#dde1e7;

}
.imgPrev-img{
  display:none;
  width:100%;
}




#inpFile{
    width:230px;
    
    border:2px solid black;
    
}




#info{
    margin-top:35px;
    margin-left:400px;
    
    
}
input {
  display: inline-block;
  border:2px solid black;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  margin-top:10px;
  border-radius: 50px;
  
}
#bt1{
    background-color:black;
    border-color:black;
    width:150px;
 height:40px;
 color:white;
 font-size:20px;
 border-radius:5px;
margin-left:525px;
margin-top:5px;
margin-bottom:20px;
text-align:center;  
}
#IF{
    margin-left:680px;
}


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
input{
  color:black;
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
    
    <a href="home.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="ownerList.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Owners list</a>
    <a href="customerList.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Customers list</a>
    <a href="rewardsPage.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gift fa-fw"></i>  rewards</a>
    <a href="editProfile.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Edit profile</a><br><br>
  </div>


</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div>


<H1 align='center'> Customer  list   </H1>
<?php 

     $conn = new mysqli('localhost', 'root', '', 'senior');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM rewards WHERE  Retitle LIKE '%$searchKey%' ";
     }else
     $sql = "SELECT * FROM rewards ";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
     
        <input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo @$_GET['search']; ?> > 
     
      <button class="btn">Search</button>
     
   </form>

   <br> 
   <br>

<table border='1' width='50%' 
 align='center'>
 <TR><TH>ID</TH><TH>Retitle</TH><TH>points</TH><TH>Original Price</TH><TH>Discounted Price</TH><TH> Sale </TH><TH class="delete">Delete</TH></TR>
 <?php while( $row = $result->fetch_object() ): ?>
  <tr>
  <td><?php echo $row->id ?></td>
     <td><?php echo $row->Retitle ?></td>
     <td><?php echo $row->pts ?></td>
     <td><?php echo $row->fromC ?></td>
     <td><?php echo $row->toC ?></td>
     <td><?php echo $row->sale ?></td> 
     
     <td><a href="deleteRewards.php?id=<?php echo $row->id 
	
	?>"> <button class="b2"> delete </button></a></td>
     


     
  <?php
  $con=mysqli_connect("localhost","root","","senior");
   


	if(isset($_POST['delete']) )
	{
	   
	   $delete = $_POST['$row->id'];
	   $sql = "DELETE FROM `rewards` where `id` = '$delete'"; 
	   mysqli_query($con, $sql);
  }


endwhile; ?>
  






</table>





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

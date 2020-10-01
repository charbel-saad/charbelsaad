<?php
session_start(); 
if (!isset($_SESSION['login_user'])){
  echo "You need to login";
  header("Location: senior.php");
	
}

?>
<html>

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
input{
  color:black;
}
.btn{}

.br_btn{
  float:left;
  margin-top:-40px;
  margin-left:900px;
  background-color:green;
  border:none;
  height:30px;


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

<H1 align='center'> Owner  list   </H1>
<?php 

     $conn = new mysqli('localhost', 'root', '', 'senior');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM user WHERE userName LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM user";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
     
        <input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo @$_GET['search']; ?> > 
     
      <button class="btn">Search</button>
     
   </form>
   <a href=broadcastPage.php><button class=br_btn>BroadCast message </button></a>

   <br> 
   <br>

<table border='1' width='50%' 
 align='center'>
 <TR><TH>ID</TH><TH>User Name</TH><TH>Password</TH><TH>fname</TH><TH>lname</TH><TH>Email</TH><TH>Address</TH><TH>Phone</TH><TH class="delete">Chat</TH></TR>
 <?php while( $row = $result->fetch_object() ): ?>
  <tr>
  <td><?php echo $row->ID ?></td>
     <td><?php echo $row->userName ?></td>
     <td><?php echo $row->password ?></td>
     <td><?php echo $row->fname ?></td>
     <td><?php echo $row->lname ?></td>
     <td><?php echo $row->Email ?></td> 
     <td><?php echo $row->Address ?></td> 
     <td><?php echo $row->Phone ?></td>
     <td> <button class="b2" > <a href="mssgPage.php?userName=<?php echo $row->userName
	
	?>">Start chat</a>  </button></td>
     </tr>


     
  <?php
  $con=mysqli_connect("localhost","root","","senior");
   


	if(isset($_POST['delete']) )
	{
	   
	   $delete = $_POST['$row->ID'];
	   $sql = "DELETE FROM `user` where `ID` = '$delete'"; 
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


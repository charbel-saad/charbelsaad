<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<title>register</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 400px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background-color:#283747;    
  
  
}
#submit{
  background: #088CD1;
}

#spanPass{
  font-size:12px;
  margin-top:0px;
  margin-left:-120px;
  color:#585656;
}
.back a{
  text-decoration:none;
  color:white;
  
}
.back{
  margin-top:10px;
  background-color: red ;
}







</style>

</head>

<body>
<FORM ACTION="registerForm.php" METHOD=post>
<div class="register-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="Firstname" name="fname"/>
      <input type="text" placeholder="Lastname" name="lname"/>
      <input type="text" placeholder="Username" name="userName"/>
      <input type="password" placeholder="password" name="password1"   />
      <p id="spanPass">Must contain a minimuim of 8 characters.</p>
      <input type="password" placeholder="re-enter your password " name="password2" />
      <input type="email" placeholder="Email" name="email" />
      <input type="text" placeholder="address" name="address" />
      <input type="number"   placeholder="phone" name="phone" />
      
      <button name="submit" id=submit >create</button>
      <button class=back><a href='senior.php' >go to login page</a></button>
      
</form>
</div>
</div>

</FORM>

<?php
 session_start();session_destroy();
 session_start();
 if (isset($_POST['submit'])) {
if($_POST["fname"] && $_POST["lname"] && $_POST["userName"] &&  $_POST["password1"] && $_POST["password2"] && $_POST["email"] && $_POST["address"] && $_POST["phone"] ){
    $name=$_POST["userName"];
    $fn=$_POST["fname"];
    $ln=$_POST["lname"];
    $pass1=$_POST["password1"];
    $pass2=$_POST["password2"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];


    if($pass1 != $pass2){
      echo "";?><div class='w3-padding w3-display-middle'> <div class="w3-panel w3-red w3-display-container">
      <span onclick="this.parentElement.style.display='none'"
      class="w3-button w3-large w3-display-topright">&times;</span>
      <h3>Warning !</h3>
      <p> Password doesn't match </p>
    </div>   </div>
      <?php 
    }
if((strlen($pass1) >8) && (strlen($phone) >=8)){
    if($pass1==$pass2){

	$servername="localhost";
    $username="root";
    $conn=  mysqli_connect($servername,$username,"","senior")or die(mysql_error());

    $sql="INSERT into user (ID,userName,password,fname,lname,Email,Address,Phone,roleid)values('','$name','$pass1','$fn','$ln','$email','$address','$phone','3')";
    $result=mysqli_query($conn,$sql) ;
    		
    print "<h1>you have registered sucessfully</h1>";
   
    
  }
}else echo "<script>alert('Password or phone  must contain at least 8 characters ')</script>";

}
 }
else print"invaild input data";

?>
</body>
</html>
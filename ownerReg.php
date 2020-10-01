<html>
<style>
body{
    
    background: #283747;
  }
  .form {
  
  background: #FFFFFF;
  max-width: 1000px;
  height:800px;
  margin: 0 auto 100px;
  padding: 45px;
 
  
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  
}
.register{
    float:left;
    width:500px;
    
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 80%;
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
  margin-top:15px;
  margin-left:50%;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
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
#submit{
  background: #088CD1;
}

#spanPass{
  font-size:12px;
  margin-top:0px;
  margin-left:0px;
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
<body>
<FORM ACTION="ownerReg.php" METHOD=post>
<div class="register-page">
  <div class="form">
  <div class="register">
    <form class="register-form">
    <h2>Registration  </h2>
      <input type="text" placeholder="Firstname" name="fname"/>
      
      <input type="text" placeholder="Lastname" name="lname"/>
      <input type="text" placeholder="store Name" name="stName"/>
      <input type="text" placeholder="Username" name="userName"/>
      <input type="password" placeholder="password" name="password1"   />
      <p id="spanPass">Must contain a minimuim of 8 characters.</p>
      <input type="password" placeholder="re-enter your password " name="password2" />
      <input type="email" placeholder="Email" name="email" />
      <input type="text" placeholder="address" name="address" />
      <input type="number"   placeholder="phone" name="phone" />
      
      <button name="submit" id=submit >create</button>
      <button class=back><a href='senior.php' >go to login page</a></button>
      

</div>
<div class="register">

        <h2>Payment Method </h2>
        <h4 > Accepted Cards </h4>
        <p><img src='credit.png' width='200px'></p>
        <p >Name On Credit</p>
      <input type="text" placeholder="Name On Credit " name="NOC"/>
      <p> Credit Card Number  </p>
      <input type="number" placeholder="1111-2222--3333-4444 " name="cardNb"/>
      <p> Exp Year  </p>
      <input type="number" placeholder="2020" name="expYear"/>
      <p> CVV  </p>
      <input type="number" placeholder="321" name="cvv" style="width:30%"/>
      
        
      
</form>
</div>
</div>

</div>

</FORM>

<?php
 session_start();session_destroy();
 session_start();
 if (isset($_POST['submit'])) {
if($_POST["fname"] && $_POST["lname"] && $_POST["userName"]  && $_POST["stName"]  &&  $_POST["password1"] && $_POST["password2"] && $_POST["email"] && $_POST["address"] && $_POST["phone"] && $_POST["NOC"] && $_POST["cardNb"] && $_POST["expYear"] && $_POST["cvv"] ){
    $name=$_POST["userName"];
    $fn=$_POST["fname"];
    $ln=$_POST["lname"];
    $pass1=$_POST["password1"];
    $pass2=$_POST["password2"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $NOC=$_POST['NOC'];
    $nb=$_POST['cardNb'];
    $year=$_POST['expYear'];
    $cvv=$_POST['cvv'];
    $st=$_POST['stName'];


    if($pass1 != $pass2){
      echo "<script>alert('password  doesn't match )</script>";
    }
if((strlen($pass1) >8) && (strlen($phone) >=8)){
    if($pass1==$pass2){

	$servername="localhost";
    $username="root";
    $conn=  mysqli_connect($servername,$username,"","senior")or die(mysql_error());

    $sql1="INSERT into user (ID,userName,password,fname,lname,Email,Address,Phone,roleid,nameOnCredit,cardNb,expYear,cvv)values('','$name','$pass1','$fn','$ln','$email','$address','$phone','2','$NOC','$nb','$year','$cvv')";
    
    $sql2="INSERT into store (ID,name,userName,address,phone,fromCash,toPoints,pp)values('','$st','$name','',0,0,0,'')";
    $result=mysqli_query($conn,$sql1) ;
    $res=mysqli_query($conn,$sql2) ;  
    		
    print "<h1>you have registered sucessfully</h1>";
   
    
  }
}else echo "<script>alert('Password or phone  must contain at least 8 character ')</script>";

}
 }


?>








</body>



</html>
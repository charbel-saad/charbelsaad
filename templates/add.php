<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>

<style>
#name{
    margin-left:150px;
}
.name{
    width:100px;
    text-align:left;
    font-weight: bold;
    font-size:15px;
}

#add_btn{
width:180px;
height:38px;
margin-top:30px;
margin-left:165px;
font-weight: bold;
background-color:#448DFC ;
cursor: pointer;
color:white;
border:1px solid #448DFC ;
}






</style>


<div id=create_parag>

<form method="post">

 <p class="name"> Code <input type=text name="code"  id="name"  /></p>
 <p class="name"> First Name <input type=text name="fname"  id="name"  /></p>
 <p class="name"> Father Name <input type=text name="father"  id="name"  /></p>
 <p class="name"> Last Name <input type=text name="lname"  id="name"  /></p>
 <p class="name"> Password <input type=text name="password"  id="name"  /></p>
 <p class="name"> Phone <input type=text name="phone"  id="name"  /></p>
 <p class="name"> Email<input type=text name="email"  id="name" /></p>
 <p class="name">  Date Of Birth<input type=text name="birth"  id="name"/></p>

<button type="submit"    name="submit" id="add_btn" > Add New Student </button>



</form>
</div>

<?php
  // Create database connection
  
  
  
  
  if (isset($_POST['submit'])) {

    if($_POST["code"] && $_POST["fname"] && $_POST["father"] &&  $_POST["lname"] && $_POST["password"] && $_POST["email"] && $_POST["birth"] && $_POST["phone"] ){

      
      $code=$_POST['code'];
      $fname=$_POST['fname'];
      $father=$_POST['father'];
      $lname=$_POST['lname'];
      $password=$_POST['password'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $birth=$_POST['birth'];
      
      global $wpdb; 
      $table_name = $wpdb->prefix . 'student';
      //$sql = "SELECT * FROM $table_name WHERE studentCode='$code' AND phone='$phone' AND email='$email' ";
      $count = $wpdb->  get_var("SELECT COUNT(*) FROM $table_name WHERE studentCode='$code'  ");

      if($count =='0' ){
      global $wpdb; 
      //$wpdb->show_errors();
      $table_name = $wpdb->prefix . 'student';
      $wpdb->insert($table_name, array('studentCode' => $code, 'fname' => $fname ,'fatherName' =>$father,'lname' =>$lname,'phone' =>$phone,'email' =>$email,'password' =>$password,'dateBirth' =>$birth)); 
      //$wpdb->print_error();
      if($wpdb ==1){
        print "<h1>Student registered sucessfully</h1>";
        }
      }else{
        print "<h1>Student already exist</h1>";
      }
  	
  }
  else print"invaild input data";
}
  ?>
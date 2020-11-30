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




<?php
 
  function addCourse(){
  
  if (isset($_POST['submit'])) {

    if($_POST["code"] && $_POST["cname"] ){
        
        global $wpdb;
      $code=$_POST['code'];
      $cname=$_POST['cname'];
      $table_name = $wpdb->prefix .'course' ;
      $count = $wpdb->  get_var("SELECT COUNT(*) FROM $table_name WHERE courseCode='$code' || c_Name='$cname' ");

      if($count == '0'){
        $table_name = $wpdb->prefix .'course' ;
      $wpdb->insert($table_name, array( 'courseCode' => $code, 'c_Name' => $cname )); 
      
       if($wpdb ==1){
        print "<h1>Course Added sucessfully</h1>";
        }
      }else{
        print "<h1>Course already exist </h1>";

      }
      
  	
  }
  else print"invaild input data";
}
?>
<form method="post">

<p class="name"> Code <input type=text name="code"  id="name"  /></p>
<p class="name"> Course Name <input type=text name="cname"  id="name"  /></p>

<button type="submit"    name="submit" id="add_btn" > Add New Course </button>



</form>

<?php
  }
  addCourse();
  ?>
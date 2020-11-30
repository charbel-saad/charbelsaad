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
</head>

<form method=post>
<label > ID :
    <?php

echo $_GET['id'];
$id=$_GET['id'];

?>
</label>
</form>
<form method=post> 
<?php
global $wpdb;
//$wpdb->show_errors();
$table_name = $wpdb->prefix . 'student';
$sql = "SELECT * FROM $table_name WHERE  id='$id'";
//$wpdb->print_error();
$results = $wpdb->get_results( $sql );

if( $results ) {

    foreach( $results as $result ) {
    ?>

 <p class="name"> Code <input type=text name="code"  id="name"  value="<?php echo $result->studentCode ?>"/></p>
 <p class="name"> First Name <input type=text name="fname"  id="name" value="<?php echo $result->fname ?>" /></p>
 <p class="name"> Father Name <input type=text name="father"  id="name" value="<?php echo $result->fatherName ?>" /></p>
 <p class="name"> Last Name <input type=text name="lname"  id="name" value="<?php echo $result->lname ?>" /></p>
 <p class="name"> Password <input type=text name="password"  id="name" value="<?php echo $result->password ?>" /></p>
 <p class="name"> Phone <input type=text name="phone"  id="name" value="<?php echo $result->phone ?>" /></p>
 <p class="name"> Email<input type=text name="email"  id="name" value="<?php echo $result->email ?>" /></p>
 <p class="name">  Date Of Birth<input type=text name="birth"  id="name" value="<?php echo $result->dateBirth ?>" /></p>

<button type="submit"    name="submit" id="add_btn" > Update </button>

<?php
}
}
?>

</form>


<?php
  // Create database connection
  
  
  if (isset($_POST['submit'])) {
    
      $code=$_POST['code'];
      $fname=$_POST['fname'];
      $father=$_POST['father'];
      $lname=$_POST['lname'];
      $password=$_POST['password'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $birth=$_POST['birth'];
      $date = date('Y-m-d H:i:s');

      global $wpdb;
      $table_name = $wpdb->prefix .'student' ;
      $wpdb->update( 
        $table_name, 
        array( 
            'studentCode' => $code,  
            'fname' => $fname,
            'fatherName' => $father,
            'lname' => $lname,
            'phone' => $phone,
            'email' => $email,
            'password' => $password,
            'dateBirth' => $birth

              
        ), 
        array( 'id' => $id ));
      if($wpdb ==1){
      print "<h1>Student updated sucessfully</h1>";
      }

  	
  }
  ?>
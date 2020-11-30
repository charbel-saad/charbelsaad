
<html>


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

echo $_GET['c_ID'];
$c_ID=$_GET['c_ID'];

?>
</label>
<br>




</form>

<form method=post> 
<?php
//$con=mysqli_connect("localhost","wp_user","password","wordpress_db");
global $wpdb;
//$wpdb->show_errors();
$table_name = $wpdb->prefix . 'course';
$sql = "SELECT * FROM $table_name WHERE  c_ID='$c_ID'";
//$wpdb->print_error();
$results = $wpdb->get_results( $sql );

if( $results ) {

    foreach( $results as $result ) {
    ?>

 <p class="name"> Code <input type=text name="code"  id="name"  value="<?php echo $result->courseCode ?>"/></p>
 <p class="name"> Course Name <input type=text name="cname"  id="name" value="<?php echo $result->c_Name ?>" /></p>
<button type="submit"    name="submit" id="add_btn" > Update </button>

<?php
}
}
?>

</form>


<?php
  // Create database connection
  
  
  if (isset($_POST['submit'])) {
    global $wpdb;
      $code=$_POST['code'];
      $cname=$_POST['cname'];
      $table_name = $wpdb->prefix .'course' ;
      //$conn=  mysqli_connect('localhost','wp_user','password','wordpress_db')or die(mysql_error());
  	//$query="UPDATE  wp_course SET  coursecode='$code' ,c_Name='$cname'   WHERE c_ID='c_ID'  ";
     //$result=mysqli_query($conn,$query) ;
     $wpdb->update( 
        $table_name, 
        array( 
            'courseCode' => $code,  
            'c_Name' => $cname  
        ), 
        array( 'c_ID' => $c_ID ));
      if($wpdb ==1){
      print "<h1>Course updated sucessfully</h1>";
      }

  	
  }

  


  ?>
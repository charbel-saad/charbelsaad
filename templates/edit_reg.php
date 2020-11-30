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
#select{
width:100px;
margin-left:150px;
}






</style>
</head>

<form method=post>
<label > ID :
    <?php

echo $_GET['registration_id'];
$reg_id=$_GET['registration_id'];

?>
</label>
<br>




</form>
<form method=post> 
<p class="name" > Course Code   </p> <select name="c_code" id="select">
<?php 
global $wpdb;
//$wpdb->show_errors();
$table_name = $wpdb->prefix . 'course';
$sql = "SELECT * FROM $table_name";
//$wpdb->print_error();
$results = $wpdb->get_results( $sql );

if( $results ) {
    foreach( $results as $result ) {
?>
<option> <?php 

    echo $result->courseCode ;
?></option>

<?php } } ?>

</select>

<p class="name" > Student Code   </p> <select name="s_code" id="select">

<?php 
global $wpdb;
//$wpdb->show_errors();
$table_name = $wpdb->prefix . 'student';
$sql = "SELECT * FROM $table_name";
//$wpdb->print_error();
$results = $wpdb->get_results( $sql );

if( $results ) {
    foreach( $results as $res ) {
?>
<option> <?php 

    echo $res->studentCode ;
?></option>

<?php } } ?>

</select>

<br>
<button type="submit"    name="submit" id="add_btn" > Update </button>



</form>


<?php
  
  if (isset($_POST['submit'])) {
    global $wpdb;
      $c_code=$_POST['c_code'];
      $s_code=$_POST['s_code'];
      $table_name = $wpdb->prefix .'registration' ;
  
     $wpdb->update( 
        $table_name, 
        array( 
            'c_code' => $c_code,  
            's_code' => $s_code  
        ), 
        array( 'registration_id' => $reg_id ));
      if($wpdb ==1){
      print "<h1>registration updated sucessfully</h1>";
      }
    }


  ?>
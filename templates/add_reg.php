<?php 
function addRegistration() {
?>
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
margin-left:-150px;
font-weight: bold;
background-color:#448DFC ;
cursor: pointer;
color:white;
border:1px solid #448DFC ;
}


#select{
    margin-top:-70px;
    margin-left:150px;
    width:120px;
    background-color:#3E3F41 ;
    color:white;
    font-weight: bold;
    font-size:15px;
 
}
#select2{
    margin-top:-140px;
    margin-left:150px;
    width:120px;
 background-color:#3E3F41 ;
    color:white;
    font-weight: bold;
    font-size:15px;
}



</style>


<div id=create_parag>

<form method="post">
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

<p class="name" > Student Code   </p> <select name="s_code" id="select2">

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
<button type="submit"    name="submit" id="add_btn" > Register Course </button>



</form>
</div>

<?php
  // Create database connection
  

  
  
  if (isset($_POST['submit'])) {

    if($_POST["c_code"] && $_POST["s_code"] ){
       
      
      $c_code=$_POST['c_code'];
      $s_code=$_POST['s_code'];

      $date = date('Y-m-d H:i:s');
      global $wpdb; 
      //$wpdb->show_errors();
      $table_name = $wpdb->prefix. "registration";
      $count = $wpdb->  get_var("SELECT COUNT(*) FROM $table_name WHERE c_code='$c_code' || s_code='$s_code' ");


        if($count =='0'){
            global $wpdb;
      $table_name = $wpdb->prefix. "registration";
      $wpdb->insert($table_name, array( 'c_code' => $c_code, 's_code' => $s_code)); 
      //$wpdb->print_error();
      if($wpdb ==1){
        print "<h1>Registered  sucessfully</h1>";
        }
        }else{
            print "<h1>already  Registered</h1>";
        }
      
  	
  }
  else print"invaild input data";
}
}
  ?>
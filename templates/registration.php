<style>

.add_btn{
    margin-top:22px;
    margin-left:20px;
    width:85px;
    height:30px;
    text-align:center;
    color:#448DFC ;
    cursor: pointer;
    border-radius:2px;
    border:1px solid #448DFC ;
    font-weight: bold;
}





</style>

<?php 


require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php');

class registrationTable extends WP_List_Table{

   
    
	public static function get_registrations( $orderby='',$order='',$search_term='') {

		
    if(!empty($search_term)){

      global $wpdb;
      $course_table = $wpdb->prefix . 'course';
      $student_table = $wpdb->prefix . 'student';
      $reg_table = $wpdb->prefix . 'registration';
      //$sql = "SELECT * FROM $table_name WHERE c_code='$search_term' OR s_code='$search_term'";
      $sql = "SELECT $student_table.studentCode AS student_code ,$student_table.fname AS student_name ,
      $course_table.courseCode AS course_code ,$course_table.c_Name AS course_name ,$reg_table.c_code AS reg_c_code , 
      $reg_table.s_code AS reg_s_code , $reg_table.registration_id AS registration_id FROM $student_table,$course_table,$reg_table  
       WHERE $student_table.studentCode = $reg_table.s_code AND  $course_table.courseCode = $reg_table.c_code  AND student_name='$search_term' AND course_name='$search_term' ORDER BY registration_id ";
      
      $results = $wpdb->get_results($sql , 'ARRAY_A');
  
      return $results;

    }else{

    if($orderby =='id' && $order == 'desc'){

      global $wpdb;
      $course_table = $wpdb->prefix . 'course';
      $student_table = $wpdb->prefix . 'student';
      $reg_table = $wpdb->prefix . 'registration';
    $sql = "SELECT $student_table.studentCode AS student_code ,$student_table.fname AS student_name ,
      $course_table.courseCode AS course_code ,$course_table.c_Name AS course_name ,$reg_table.c_code AS reg_c_code , 
      $reg_table.s_code AS reg_s_code , $reg_table.registration_id AS registration_id FROM $student_table,$course_table,$reg_table  
       WHERE $student_table.studentCode = $reg_table.s_code AND  $course_table.courseCode = $reg_table.c_code  ORDER BY registration_id ";


    $results = $wpdb->get_results($sql , 'ARRAY_A');

    return $results;
    }else{
      global $wpdb;
      $course_table = $wpdb->prefix . 'course';
      $student_table = $wpdb->prefix . 'student';
      $reg_table = $wpdb->prefix . 'registration';
      $sql = "SELECT $student_table.studentCode AS student_code ,$student_table.fname AS student_name ,
      $course_table.courseCode AS course_code ,$course_table.c_Name AS course_name ,$reg_table.c_code AS reg_c_code , 
      $reg_table.s_code AS reg_s_code , $reg_table.registration_id AS registration_id FROM $student_table,$course_table,$reg_table  
       WHERE $student_table.studentCode = $reg_table.s_code AND  $course_table.courseCode = $reg_table.c_code";
  
  
      $results = $wpdb->get_results($sql , 'ARRAY_A');
  
      return $results;
    }
  }
}



  //prepare_items
  public function prepare_items(){
    //$this->items = $this->data;
    $orderby = isset($_GET['orderby']) ? trim($_GET['orderby']) : ""  ;
    $order = isset($_GET['order']) ? trim($_GET['order']) : "" ;

    $search_term =isset($_POST['s']) ?trim($_POST['s']) : "";

    if(isset($_POST['action'])){
      global $wpdb;
    $table_name = $wpdb->prefix .'registration' ;
    $wpdb->delete( $table_name, array( 'registration_id' => $id ) );

    }

    $this->items = $this->get_registrations($orderby , $order,$search_term);

    $this->process_bulk_action();
    $columns = $this->get_columns();
    //$hidden=$this->get_hidden_columns();
    $sortable=$this->get_sortable_columns();
    $this->_column_headers = array($columns,'',$sortable);
  }
  //public function get_hidden_columns(){
    //return array('c_Name');
  //}\

  function column_student_name($item){
    $actions = array(
      'edit'      => sprintf('<a href="?page=my-registration-edit%s&action=%s&registration_id=%s">Edit</a>',$_REQUEST['my-registration-edit'],'edit',$item['registration_id']),
      'delete'    => sprintf('<a href="?page=course_registration%s&action=%s&registration_id=%s">Delete</a>',$_REQUEST['course_registration'],'delete',$item['registration_id']),
  );

return sprintf('%1$s %2$s', $item['student_name'], $this->row_actions($actions) );

    
  }
//////////////////////////

  public function get_bulk_actions(){
    $actions =  array(
      "bulk-delete"=>"Delete" );
    return $actions;
  }


  
  
  
  



///////////////////////////

  public function column_cb($item){
    return sprintf(
      '<input type="checkbox" name="post[]" value="%s" />', $item['id']
  );
  }

  public function get_sortable_columns(){
    return array(
        "registration_id"=>array("registration_id",false),
        //"c_Name"=>array("c_Name",false)

    );

  }

  public function get_columns(){
    $columns = array(
      'cb'=> '<input type="checkbox" />',
      "registration_id"=>"ID",
      "student_name"=>"Student Name",
      "course_name"=>"Course Name"
    );
    return $columns;
  }
  public function column_default($item,$column_name){
      switch($column_name){

        case 'registration_id':
        case 'student_name':
        case 'course_name':
            return $item[$column_name];
        default:
            return "no value";

      }
    
  }



}


function reg_table_data(){
  $reg_table = new registrationTable();

 // calling prepare_items of the class
  $reg_table->prepare_items();
  echo '<H1 style="float:left"> Registrations  </H1>
  <a  href="?page=my-submenu-handle"><button class="add_btn" > Add New  </button></a> ';
  echo "<form method='post' name='frm_search_course' action='".$_SERVER['PHP_SELF']."?page=course_registration'>";
  $reg_table ->search_box("Search Registration(s)","Search_Registration_id");
  $reg_table->display();

  global $wpdb;
  $id=$_GET['registration_id'];
    $table_name = $wpdb->prefix .'registration' ;
  
      $wpdb->delete( $table_name, array( 'registration_id' => $id ) );


}
reg_table_data();
























?>
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

class courseTable extends WP_List_Table{

    //var $data=array(
      //array('id'=>1,'name'=>'charbel','email'=>'charbelsaad001@gmail.com'),
      //array('id'=>2,'name'=>'tony','email'=>'tony_s@gmail.com'),
      //array('id'=>3,'name'=>'jay','email'=>'jay.ht@gmail.com'),

    //);
    
	public static function get_courses( $orderby='',$order='',$search_term='') {

		
    if(!empty($search_term)){

      global $wpdb;
      $table_name = $wpdb->prefix . 'course';
      $sql = "SELECT * FROM $table_name WHERE c_ID='$search_term' OR c_Name='$search_term'";
  
  
      $results = $wpdb->get_results($sql , 'ARRAY_A');
  
      return $results;

    }else{

    if($orderby =='c_ID' && $order == 'desc'){

      global $wpdb;
    $table_name = $wpdb->prefix . 'course';
    $sql = "SELECT * FROM $table_name ORDER BY c_ID DESC";


    $results = $wpdb->get_results($sql , 'ARRAY_A');

    return $results;
    }else{
      global $wpdb;
      $table_name = $wpdb->prefix . 'course';
      $sql = "SELECT * FROM $table_name ";
  
  
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
    $table_name = $wpdb->prefix .'course' ;
    $wpdb->delete( $table_name, array( 'c_ID' => $id ) );

    }

    $this->items = $this->get_courses($orderby , $order,$search_term);

    $this->process_bulk_action();
    $columns = $this->get_columns();
    //$hidden=$this->get_hidden_columns();
    $sortable=$this->get_sortable_columns();
    $this->_column_headers = array($columns,'',$sortable);
  }
  //public function get_hidden_columns(){
    //return array('c_Name');
  //}\

  function column_courseCode($item){
    $actions = array(
      'edit'      => sprintf('<a href="?page=my-course-edit%s&action=%s&c_ID=%s">Edit</a>',$_REQUEST['my-course-edit'],'edit',$item['c_ID']),
      'delete'    => sprintf('<a href="?page=un_registration%s&action=%s&c_ID=%s">Delete</a>',$_REQUEST['un_registration'],'delete',$item['c_ID']),
  );

return sprintf('%1$s %2$s', $item['courseCode'], $this->row_actions($actions) );

    
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
      '<input type="checkbox" name="post[]" value="%s" />', $item['c_ID']
  );
  }

  public function get_sortable_columns(){
    return array(
        "c_ID"=>array("c_ID",false),
        //"c_Name"=>array("c_Name",false)

    );

  }

  public function get_columns(){
    $columns = array(
      'cb'=> '<input type="checkbox" />',
      "c_ID"=>"ID",
      "courseCode"=>"Code",
      "c_Name"=>"Name"
    );
    return $columns;
  }
  public function column_default($item,$column_name){
      switch($column_name){

        case 'c_ID':
        case 'courseCode':
        case 'c_Name':
            return $item[$column_name];
        default:
            return "no value";

      }
    
  }



}


function course_table_data(){
  $course_table = new courseTable();

 // calling prepare_items of the class
  $course_table->prepare_items();
  echo '<H1 style="float:left"> Courses  </H1>
  <a  href="?page=my-course-handle"><button class="add_btn" > Add New  </button></a> ';
  echo "<form method='post' name='frm_search_course' action='".$_SERVER['PHP_SELF']."?page=un_registration'>";
  $course_table ->search_box("Search Course(s)","Search_Course_id");
  $course_table->display();

  global $wpdb;
  $c_ID=$_GET['c_ID'];
    $table_name = $wpdb->prefix .'course' ;
  
      $wpdb->delete( $table_name, array( 'c_ID' => $c_ID ) );


}
course_table_data();




//function course_table_layout(){

  //$course_table = new courseTable();

  //calling prepare_items of the class
  //$course_table->prepare_items();

  //$course_table->display();
//}

//course_table_layout();






















?>
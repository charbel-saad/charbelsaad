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

class studentTable extends WP_List_Table{

   
    
	public static function get_students( $orderby='',$order='',$search_term='') {

		
    if(!empty($search_term)){

      global $wpdb;
      $table_name = $wpdb->prefix . 'student';
      $sql = "SELECT * FROM $table_name WHERE studentCode='$search_term' OR fname='$search_term' OR fatherName='$search_term' OR lname='$search_term'";
  
  
      $results = $wpdb->get_results($sql , 'ARRAY_A');
  
      return $results;

    }else{

    if($orderby =='id' && $order == 'desc'){

      global $wpdb;
    $table_name = $wpdb->prefix . 'student';
    $sql = "SELECT * FROM $table_name ORDER BY id DESC";


    $results = $wpdb->get_results($sql , 'ARRAY_A');

    return $results;
    }else{
      global $wpdb;
      $table_name = $wpdb->prefix . 'student';
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
    $table_name = $wpdb->prefix .'student' ;
    $wpdb->delete( $table_name, array( 'id' => $id ) );

    }

    $this->items = $this->get_students($orderby , $order,$search_term);

    $this->process_bulk_action();
    $columns = $this->get_columns();
    //$hidden=$this->get_hidden_columns();
    $sortable=$this->get_sortable_columns();
    $this->_column_headers = array($columns,'',$sortable);
  }
  //public function get_hidden_columns(){
    //return array('c_Name');
  //}\

  function column_studentCode($item){
    $actions = array(
      'edit'      => sprintf('<a href="?page=my-submenu-edit%s&action=%s&id=%s">Edit</a>',$_REQUEST['my-submenu-edit'],'edit',$item['id']),
      'delete'    => sprintf('<a href="?page=alecaddd_plugin%s&action=%s&id=%s">Delete</a>',$_REQUEST['alecaddd_plugin'],'delete',$item['id']),
  );

return sprintf('%1$s %2$s', $item['studentCode'], $this->row_actions($actions) );

    
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
        "id"=>array("id",false),
        //"c_Name"=>array("c_Name",false)

    );

  }

  public function get_columns(){
    $columns = array(
      'cb'=> '<input type="checkbox" />',
      "id"=>"ID",
      "studentCode"=>"Code",
      "fname"=>"First Name",
      "fatherName"=>"Father Name",
      "lname"=>"Last Name",
      "email"=>" Email",
      "dateBirth"=>" Date Of Birth",
      "phone"=>" Phone",
    );
    return $columns;
  }
  public function column_default($item,$column_name){
      switch($column_name){

        case 'id':
        case 'studentCode':
        case 'fname':
        case 'fatherName':
        case 'lname':
        case 'email':
        case 'dateBirth':
        case 'phone':
            return $item[$column_name];
        default:
            return "no value";

      }
    
  }



}


function student_table_data(){
  $student_table = new studentTable();

 // calling prepare_items of the class
  $student_table->prepare_items();
  echo '<H1 style="float:left"> Students  </H1>
  <a  href="?page=my-submenu-handle"><button class="add_btn" > Add New  </button></a> ';
  echo "<form method='post' name='frm_search_course' action='".$_SERVER['PHP_SELF']."?page=alecaddd_plugin'>";
  $student_table ->search_box("Search Student(s)","Search_Student_id");
  $student_table->display();

  global $wpdb;
  $id=$_GET['id'];
    $table_name = $wpdb->prefix .'student' ;
  
      $wpdb->delete( $table_name, array( 'id' => $id ) );


}
student_table_data();
























?>
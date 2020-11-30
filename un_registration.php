<?php 

/** 
 * 
 * @package UnivresityRegistration
 */
/**
 * Plugin Name: University Registration
 * Plugin URI: http://university.com
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Charbel Saad
 * Author URI: https://github.com/charbel-saad/charbelsaad
 */


if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

if(!class_exists('UniversityRegistration')){
class UniversityRegistration    {

    public $plugin;
		function __construct() {

            add_action( 'init', array( $this, 'custom_post_type' ) );
            add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
            add_action('admin_menu',array($this,'add_course_pages'));

            add_action('admin_menu',array($this,'add_registration_pages'));


        }



        

        public function add_admin_pages() {
			add_menu_page( 'Students', 'Students', 'manage_options', 'alecaddd_plugin', array( $this, 'indexPage' ), 'dashicons-admin-users', 110 );
            add_submenu_page( 'alecaddd_plugin', 'New Student', ' New Student', 'manage_options', 'my-submenu-handle', array( $this, 'NewStudent' ));
            add_submenu_page( 'alecaddd_plugin', 'Edit Student', ' Edit Student', 'manage_options', 'my-submenu-edit', array( $this, 'editStudent' ));
        
        
        }
        public function add_course_pages(){
            add_menu_page( 'Courses ', 'Courses', 'manage_options', 'un_registration', array( $this, 'CoursePage' ), 'dashicons-book', 110 );
            add_submenu_page( 'un_registration', 'New StuCoursedent', ' New Course', 'manage_options', 'my-course-handle', array( $this, 'newCourse' ));
            add_submenu_page( 'un_registration', 'Edit Course', ' Edit Course', 'manage_options', 'my-course-edit', array( $this, 'editCourse' ));
        
        
        }
        public function add_registration_pages(){
            add_menu_page( 'Registration ', 'Registration', 'manage_options', 'course_registration', array( $this, 'registration' ), 'dashicons-welcome-add-page', 110 );
            add_submenu_page( 'course_registration', 'New Registration', ' New Registration', 'manage_options', 'my-registration-handle', array( $this, 'newRegistration' ));
            add_submenu_page( 'course_registration', 'Edit registration', ' Edit Registration', 'manage_options', 'my-registration-edit', array( $this, 'editRegistration' ));
        
        
        }
       
        
        
        public function indexPage() {
        
            require_once plugin_dir_path( __FILE__ ) . 'templates/index.php';
            
        }
        public function CoursePage() {
        
            include_once plugin_dir_path( __FILE__ ) . 'templates/courses.php';
            //include_once('courses.php');
            
            
           // course_list();
        
            
        }
        public function NewStudent() {
        
            require_once plugin_dir_path( __FILE__ ) . 'templates/add.php';
            
        }
        public function editStudent() {
        
            require_once plugin_dir_path( __FILE__ ) . 'templates/edit_students.php';
            
        }
        public function newCourse() {
        
            require_once plugin_dir_path( __FILE__ ) . 'templates/add_course.php';
            
        }
        public function editCourse() {
        
            require_once plugin_dir_path( __FILE__ ) . 'templates/edit_course.php';
            
        }
        public function registration() {
        
            require_once plugin_dir_path( __FILE__ ) . 'templates/registration.php';
            
        }
        public function newRegistration() {
        
            require_once plugin_dir_path( __FILE__ ) . 'templates/add_reg.php';
            addRegistration();
            
        }
        public function editRegistration() {
        
            require_once plugin_dir_path( __FILE__ ) . 'templates/edit_reg.php';
            
        }
        
        
    protected function create_post_type() {
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }
    function custom_post_type() {
        register_post_type('book',['public' =>true,'label'=>'Books']);
    }
    
    

    function activate() {
        
        require_once plugin_dir_path( __FILE__ ) . 'inc/un_registration-activate.php';
        UniverrsityRegistrationActivate::activate();
        
    }


}
    $universityRegistration = new UniversityRegistration();
    


//activation 
register_activation_hook(__FILE__ , array($universityRegistration, 'activate'));
include_once("db_create.php");
register_activation_hook(__FILE__ ,'my_plugin_create_db');
include_once("db_course.php");
register_activation_hook(__FILE__ ,'course_db_create');
include_once("db_registration.php");
register_activation_hook(__FILE__ ,'reg_db_create');







//deactivation
require_once plugin_dir_path( __FILE__ ) . 'inc/un_registration-deactivate.php';
register_deactivation_hook(__FILE__ , array($universityRegistration, 'deactive'));

}
<?php 

function course_db_create() {

    global $wpdb;
      
    $table_name = $wpdb->prefix . 'course';

    $sql = "CREATE TABLE $table_name (
        c_ID mediumint(9) NOT NULL AUTO_INCREMENT,
        courseCode mediumint(8) NOT NULL,
        c_Name varchar(255)   NOT NULL,
        PRIMARY KEY (c_ID),
        CONSTRAINT course_unique UNIQUE (studentCode)
    )";
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql);
    
    

}
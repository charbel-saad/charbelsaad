<?php 

function my_plugin_create_db() {

    global $wpdb;
      
    $table_name = $wpdb->prefix . 'student';

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        studentCode mediumint(8) NOT NULL,
        fname varchar(255)   NOT NULL,
        fatherName varchar(255)   NOT NULL,
        lname varchar(255)   NOT NULL,
        phone mediumint(8)   NOT NULL,
        email varchar(255)   NOT NULL,
        password varchar(255)   NOT NULL,
        dateBirth varchar(255)   NOT NULL,
        dateCreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        CONSTRAINT student_unique UNIQUE (studentCode)
    )";
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql);
    
    

}
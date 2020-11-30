<?php 

function reg_db_create() {

    global $wpdb;
    
    $table_name = $wpdb->prefix . 'registration';
    $student_table = $wpdb->prefix . 'student';
    $course_table = $wpdb->prefix . 'course';

    $sql = "CREATE TABLE $table_name (
        registration_id mediumint(9) NOT NULL AUTO_INCREMENT,
        c_code mediumint(9) NOT NULL,
        s_code mediumint(9) NOT NULL,
        reg_date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (registration_id),

        FOREIGN KEY (c_code) REFERENCES $course_table (c_ID)
                ON DELETE CASCADE
                ON UPDATE CASCADE,

            FOREIGN KEY (s_code) REFERENCES $student_table (id)
                ON DELETE CASCADE
                ON UPDATE CASCADE,

        CONSTRAINT registration_unique UNIQUE (c_code, s_code)
    )";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta( $sql);
    
    

}
<?php 

/**
 * @package UniverrsityRegistration 
*/

class UniverrsityRegistrationDeactivate{

    public static function deactivate(){
        flush_rewrite_rules();
    }
}
<?php
namespace Inc\Pages;    

/*
* @package brij plugin
*/

class Admin extends BaseController
{
    
    public function register() {
        
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
    }

    public function add_admin_pages(){
        add_menu_page( 'Brij Plugin', 'Brij', 'manage_options', 'brij_plugin', array( $this, 'admin_index'), 'dashicons-businessman',  110 );
    }   

    public function admin_index()
    {
        require_once $this->plugin_path .'template/admin.php';
    }

}
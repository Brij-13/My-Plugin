<?php

/*
* @package brij plugin
*/

/*
 * Plugin Name: Brij Plugin
 * Description: This is my first plugin.
 * Plugin URI:
 * Author: Brij
 * Author URI: 
 * Version: 1.0.0
*/

// if(! define('ABSPATH')){
//     die;
// }


// if (! function_exists('add_action')){
//     echo "hey You are not accessing files! ";
//     exit;
// }

defined('ABSPATH') or die('hey You are not accessing files!');

if( file_exists(dirname(__FILE__). '/vendor/autoload.php')){
    require_once dirname(__FILE__). '/vendor/autoload.php';
}

use Inc\Activate;
use Inc\Deactivate;
use Inc\Admin\AdminPages;
// require_once plugin_dir_path(__FILE__). '/Inc/Admin/AdminPages.php';

if(!class_exists('brijPlugin')){

class brijPlugin
{

    public $plugin;

    function __construct(){
        $this -> plugin = plugin_basename(__FILE__);
    }

    function register() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
        add_filter('plugin_action_links_'. $this-> plugin, array( $this, 'settings_link' ) );
    }

    public function settings_link($links){
        $settings_link = '<a href="admin.php?page=brij_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }

    public function add_admin_pages(){
        add_menu_page( 'Brij Plugin', 'Brij', 'manage_options', 'brij_plugin', array( $this, 'admin_index'), 'dashicons-businessman',  110 );
    }

    public function admin_index()
    {
        require_once plugin_dir_path(__FILE__).'template/admin.php';
    }

    protected function create_post_type() {
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }

    function custom_post_type(){
        register_post_type( 'book', ['public' => true, 'label' => 'book' ] );
    }

    function enqueue(){
        wp_enqueue_style( 'mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__ ) );
        wp_enqueue_script( 'mypluginscript', plugins_url('/assets/myscript.js', __FILE__ ) );
    }

    function activate(){
        Activate::activate();
    }
}


    $BrijPlugin = new brijPlugin();
    $BrijPlugin -> register();


//activate

register_activation_hook( __FILE__, array ('$brijPlugin', 'activate') );

//deactivate
register_deactivation_hook( __FILE__, array ('Deactivate', 'deactivate') );
}
//uninstall
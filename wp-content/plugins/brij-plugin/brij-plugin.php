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
 
define( 'PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'PLUGIN_URL', plugin_dir_url(__FILE__));

if (class_exists( 'Inc\\init' ) ) {
    Inc\init::register_services();
}
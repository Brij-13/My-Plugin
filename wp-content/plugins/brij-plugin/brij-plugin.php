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
define( 'PLUGIN', plugin_basename(__FILE__));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function activate_brij_plugin()
{
    Activate::activate();
}

function deactivate_brij_plugin()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'activate_brij_plugin' );
register_deactivation_hook(__FILE__, 'deactivate_brij_plugin' );

if (class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}
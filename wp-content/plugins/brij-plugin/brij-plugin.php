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

defined('ABSPATH') or die('hey You are not accessing files!');

if( file_exists(dirname(__FILE__). '/vendor/autoload.php')){
    require_once dirname(__FILE__). '/vendor/autoload.php';
}


function activate_brij_plugin()
{
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_brij_plugin' );


function deactivate_brij_plugin()
{
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_brij_plugin' );

if (class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}
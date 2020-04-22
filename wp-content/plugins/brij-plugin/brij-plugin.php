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

class brijPlugin
{
    function __construct() {
        add_action( 'init', array( $this, 'custom_post_type'));
    }

    function activate(){
        //generate a CPT
        $this -> custom_post_type();
        //flush rewrite rules
        flush_rewrite_rules();
    }
    
    function deactivate(){
        //flush rewrite rules
    }

    function uninstall(){
        // delete CPT
        // delete all plugin related data from DB
    }

    function custom_post_type(){
        register_post_type('book',['public' => true,'label' => 'book']);
    }
}

if(class_exists('brijPlugin')){
    $BrijPlugin = new brijPlugin();
}

//activate
register_activation_hook( __FILE__, array ($BrijPlugin, 'activate') );

//activate
register_deactivation_hook( __FILE__, array ($BrijPlugin, 'deactivate') );

//uninstall
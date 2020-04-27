<?php    

/*
* @package brij plugin
*/

namespace Inc\Base;

use \Inc\Base\BaseContoller;

class Enqueue extends BaseContoller
{
    
    public function register() {
        add_action('admin_enqueue_scripts', array($this, 'enqueue' ) );
    }

    function enqueue() {
        wp_enqueue_style( 'mypluginstyle', $this->plugin_url . 'assets/mystyle.css' );
        wp_enqueue_script( 'mypluginscript', $this->plugin_url . 'assets/myscript.js' );
    }    
}
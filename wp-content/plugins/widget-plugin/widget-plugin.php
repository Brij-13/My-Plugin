<?php
/**
 * Plugin Name:       Widget Plugin
 * Description:       This plugin is relate to widget.
 * Version:           1.0.0
 * Author:            Brij
 * License:           GPL v2 or later
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once(plugin_dir_path(__FILE__).'/includes/widget-enqueue.php');
require_once(plugin_dir_path(__FILE__).'/includes/widget.class.php');

function registerwid()
{
	register_widget('my_Widget');
}
add_action('widgets_init','registerwid');
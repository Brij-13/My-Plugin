<?php

function wid_enqueue()
{
	wp_enqueue_script('wid-script', plugins_url(). '/assets/myscript.js');


	 wp_register_script('google-script','https://apis.google.com/js/platform.js');
	 wp_enqueue_script('google-script');

	wp_enqueue_style('wid-style', plugins_url(). '/assets/mystyle.css');
}
add_action('wp_enqueue_scripts','wid_enqueue');
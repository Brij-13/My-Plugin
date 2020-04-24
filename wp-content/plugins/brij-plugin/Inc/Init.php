<?php

/*
* @package brij plugin
*/
namespace Inc;
?>
<?php

final class Init{

/**
 * store all the classes inside  an array
 * @return array full list of classes
 */

    public static function get_services()
    {
        // return[
        //     Pages\Admin::class,
        //     Base\Enqueue::class
        // ];

        return array(
            Pages\Admin:: class ,
            Base\Enqueue:: class
        );
    }

/**
 * Loop thorugh the classes, initialize them,
 * add call the register() method if it exists
 * @return
 */

    public static function register_services()
    {
        foreach( self::get_services() as $class ){
            $service = self::instantiate( $class );
            if( method_exists( $service, 'register') ){
                $service->register();
            }
        }
    }

/**
 * Initialize the class
 * @param class $class class from the services array
 * @return class instance new instance of the class
 */

 private static function instantiate( $class )
 {
     $service = new $class();
     return $service;
 }

}
// use Inc\Base\Activate;
// use Inc\Base\Deactivate;
// use Inc\Admin\AdminPages;
// // require_once plugin_dir_path(__FILE__). '/Inc/Admin/AdminPages.php';

// if(!class_exists('brijPlugin')){

// class brijPlugin
// {

//     public $plugin;

//     function __construct(){
//         $this -> plugin = plugin_basename(__FILE__);
//     }

//     function register() {
//         add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
//         add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
//         add_filter('plugin_action_links_'. $this-> plugin, array( $this, 'settings_link' ) );
//     }

//     public function settings_link($links){
//         $settings_link = '<a href="admin.php?page=brij_plugin">Settings</a>';
//         array_push($links, $settings_link);
//         return $links;
//     }

//     public function add_admin_pages(){
//         add_menu_page( 'Brij Plugin', 'Brij', 'manage_options', 'brij_plugin', array( $this, 'admin_index'), 'dashicons-businessman',  110 );
//     }

//     public function admin_index()
//     {
//         require_once plugin_dir_path(__FILE__).'template/admin.php';
//     }

//     protected function create_post_type() {
//         add_action( 'init', array( $this, 'custom_post_type' ) );
//     }

//     function custom_post_type(){
//         register_post_type( 'book', ['public' => true, 'label' => 'book' ] );
//     }

//     function enqueue(){
//         wp_enqueue_style( 'mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__ ) );
//         wp_enqueue_script( 'mypluginscript', plugins_url('/assets/myscript.js', __FILE__ ) );
//     }

//     function activate(){
//         Activate::activate();
//     }
// }


//     $BrijPlugin = new brijPlugin();
//     $BrijPlugin -> register();


// //activate

// register_activation_hook( __FILE__, array ('$brijPlugin', 'activate') );

// //deactivate
// register_deactivation_hook( __FILE__, array ('Deactivate', 'deactivate') );
// }
// //uninstall
<?php    

/*
* @package brij plugin
*/

namespace Inc\Api\Callbacks;
use Inc\Base\BaseController;
class AdminCallbacks extends BaseController
{
    public function adminDashboard()
    {
        return require_once( "$this->plugin_path/template/admin.php" );
    }

    public function cptManager()
    {
        return require_once( "$this->plugin_path/template/CPT.php" );
    }

    public function taxonomiesManager()
    {
        return require_once( "$this->plugin_path/template/Taxonomies.php" );
    }

    public function widgetsManager()
    {
        return require_once( "$this->plugin_path/template/Widgets.php" );
    }

    public function brijOptionsGroup($input)
    {
        return $input;
    }

    public function brijAdminSection()
    {
        echo 'Check this section!';
    }

    public function brijTextExample()
    {
        $value = esc_attr(get_option( 'text_example' ));
        echo '<input type="text" class="regular-text" name="text_example" value="' .$value. '" placeholder="Write somthing here...">';
    }

    public function brijFirstName()
    {
        $value = esc_attr(get_option( 'first_name' ));
        echo '<input type="text" class="regular-text" name="first_name" value="' .$value. '" placeholder="Write somthing here...">';
    }

    public function brijText()
    {
        $value = esc_attr(get_option('text'));
        echo '<input type="text" class="regular-text" name="text" value="' .$value. '" placeholder="Write somthing here...">';
    }
}
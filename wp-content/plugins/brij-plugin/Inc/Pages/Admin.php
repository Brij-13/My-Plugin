<?php
namespace Inc\Pages;

 use Inc\Base\BaseController;
 use Inc\Api\SettingsApi;
 use Inc\Api\Callbacks\AdminCallbacks;

/*
* @package brij plugin
*/

class Admin extends BaseController
{
    public $settings;

    public $callbacks;

    public $pages = array();

    public $subpages = array();

    public $setSettings = array();

    public $setSection = array();

    public $setFields = array();

    public function register() {
        
        $this->settings = new SettingsApi();
        $this->callbacks = new AdminCallbacks();
        $this->setPages();
        $this->setSubpages();
        // $this->setSettings();
        // $this->setSections();
        // $this->setFields();

        $this->settings->addPages( $this->pages )->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

    public function setPages()
    {
        $this->pages = array (
            array(
                 'page_title' => 'Brij Plugin',
                 'menu_title' => 'Brij',
                 'capability' => 'manage_options',
                 'menu_slug' => 'brij_plugin',
                 'callback' => array($this->callbacks, 'adminDashboard'),
                 'icon_url' => 'dashicons-businessman',
                 'position' => 110
             )
         );
    }
    
    public function setSubpages()
    {
        $this->subpages=array(
            array(

                'parent_slug' =>'brij_plugin',
                'page_title' => 'Custom Post Type',
                'menu_title' => 'CPT',
                'capability' => 'manage_options',
                'menu_slug' => 'brij_cpt',
                'callback' => array($this->callbacks, 'cptManager')
            ),
            array(  

                'parent_slug' => 'brij_plugin',
                'page_title' => 'Custom Taxonomies',
                'menu_title' => 'Taxonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'brij_taxonomies',
                'callback' => array($this->callbacks, 'taxonomiesManager')
            ),
            array(

                'parent_slug' => 'brij_plugin',
                'page_title' => 'Custom Widgets',
                'menu_title' => 'Widgets',
                'capability' => 'manage_options',
                'menu_slug' =>  'brij_widgets',
                'callback' => array($this->callbacks, 'widgetsManager')
            )
            );
    }

    public function setSettings()
    {
        $args = array(
            array(
                'option_group' => 'brij_plugin_settings',
                'option_name' => 'text_example',
                'callback' => array($this->callbacks, 'brijOptionsGroup')
            ),
            array(
                'option_group'=>'brij_plugin_settings',
                'option_name'=>'first_name'
            )

            );
            $this->settings->setSettings($args);
    }

    public function setSections()
    {
        $args = array(
            array(
                'id'=>'brij_admin_index',
                'title'=>'Settings',
                'callback'=>array($this->callbacks, 'brijAdminSection'),
                'page'=>'brij_plugin'
            )
            );
            $this->settings->setSections( $args );
    }

    public function setFields()
    {
        $args = array(
            array(
                'id'=>'text_example',
                'title'=>'Text Example',
                'callback'=>array($this->callbacks, 'brijTextExample'),
                'page'=>'brij_plugin',
                'section'=>'brij_admin_index',
                'args'=>array(
                    'label_for'=>'text_example',
                    'class'=>'example-class'
                )
                ),
                array(
                    'id' => 'first_name',
                    'title' => 'First Name',
                    'callback' => array( $this->callbacks, 'brijFirstName' ),
                    'page' => 'brij_plugin',
                    'section' => 'brij_admin_index',
                    'args' => array(
                        'label_for' => 'first_name',
                        'class' => 'example-class'
                    )
                ),
                array(
                    'id' => 'text',
                    'title' => 'Text',
                    'callback' => array( $this->callbacks, 'brijText' ),
                    'page' => 'brij_plugin',
                    'section' => 'brij_admin_index',
                    'args' => array(
                        'label_for' => 'text',
                        'class' => 'example-class'
                    )
                )
            );
            $this->settings->setFields($args);
    }

}
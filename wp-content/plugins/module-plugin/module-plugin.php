/**
*@package ModulePlugin
*/

/*
Plugin Name: Mudule Plugin
Plugin URI: http://plugin.com
Description: test
Version: 1.0.0
Author: sweq
Author URI: http://plugin.com
Lisence: GPLv2 or later
Text Domain
*/

<?php

// if( !defined('ABSPATH')) {
//     die;
// }

if( ! function_exists('add_action')) {
    echo 'not access';
    exit;
}

class ModulePlugin {

    function __construct()
    {
        add_action('init', [$this, 'custom_post_type']);
    }

    public function activate(){
        // Generate Custom Post Type
        $this->custom_post_type();
        // Flush rewrite rules
        flush_rewrite_rules();
    }

    public function deactivate(){
        // Flush rewrite rules
        flush_rewrite_rules();
    }

    public function uninstall(){
        // Delete Custom Post Type
        // Delete all plugin data from DB
    }

    public function custom_post_type(){
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }
}

if(class_exists('ModulePlugin')){
    $modulePlugin = new ModulePlugin();
}    

//activation
register_activation_hook(__FILE__, [$modulePlugin,'activate']);

//deactivation
register_deactivation_hook(__FILE__,  [$modulePlugin,'deactivate']);

//uninstall
// register_uninstall_hook(__FILE__, [$modulePlugin,'uninstall']);
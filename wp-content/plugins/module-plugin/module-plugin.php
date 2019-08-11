<?php
use Inc\Base\Activate;
use Inc\Base\Deactivate;

/*
Plugin Name: ModulePlugin
Plugin URI: https://example.com/
Description: ModulePlugin description
Version: 1.0
Author: Mod
Author URI: https://example.com/
License: GPL2
*/

/**
 * WP security mechanism
 */
defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}




/**
 * The code that runs during plugin activation
 */
function acticate_module_plugin()
{ 
    Inc\Base\Activate::activate();
}

/**
 * The code that runs during plugin deactivation
 */
function deactivate_module_plugin()
{
    Inc\Base\Deactivate::deactivate();
}

register_activation_hook(__FILE__, 'acticate_module_plugin');
register_deactivation_hook(__FILE__, 'deactivate_module_plugin');

/**
 * Initialize all the core classes of the plugin
 */
if (class_exists('Inc\\Init')) {
    Inc\Init::register_servises();
}

<?php 

namespace Inc;

final class Init
{
    /**
     *  Array of services
     * @return array
     */
    public static function get_servises(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLink::class,
        ];
    }

    /**
     * Register services
     *
     * @return void
     */
    public static function register_servises(){
        foreach(self::get_servises() as $class){
            $service = self::instansiate($class);
            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    private static function instansiate($class){
        $service = new $class();
        return $service;
    }
}


// use Inc\Base\Activate;
// use Inc\Base\Deactivate;

// class ModulePlugin {
    
//     public $pluginName;

//     function __construct()
//     {
//         $this->pluginName = plugin_basename(__FILE__);
//     }
 
//     public function register(){
//         add_action('admin_enqueue_scripts',[$this, 'enqueue']);
//         add_action('admin_menu',[$this,'add_admin_pages']);
//         add_filter("plugin_action_links_$this->pluginName", [$this, 'settings_link']);
        
//     }

//     public function settings_link($links){
//         // Add custom settings link
//         $settings_link = '<a href="admin.php?page=module_plugin">settings</a>';
//         array_push($links, $settings_link);
//         return $links;
//     }

//     public function add_admin_pages(){
//         add_menu_page('Module Plugin','Module','manage_options','module_plugin',[$this,'admin_index'],'dashicons-store', 110);
//     }

//     public function admin_index(){
//         require_once plugin_dir_path(__FILE__).'templates/admin.php';
//     }

//     public function activate(){
//        Activate::activate();
//     }

//     public function deactivate(){
//         Deactivate::deactivate();
//     }

//     // public function uninstall(){
//     //     // Delete Custom Post Type
//     //     // Delete all plugin data from DB
//     // }

//     protected function create_post_type(){
//         add_action('init',[$this,'custom_post_type']);
//     }

//     public function custom_post_type(){
//         register_post_type('book', ['public' => true, 'label' => 'Books']);
//     }

//     public function enqueue(){
//         // Enqueue all scripts
//         wp_enqueue_style('plugstyle',plugins_url('/assets/style.css', __FILE__));
//         wp_enqueue_script('plugscript',plugins_url('/assets/script.js', __FILE__));
//     }
// }

// if(class_exists('ModulePlugin')){
//     $modulePlugin = new ModulePlugin();
//     $modulePlugin->register();
// }    

// //activation

// register_activation_hook(__FILE__, [$modulePlugin,'activate']);

// //deactivation
// register_deactivation_hook(__FILE__,  [$modulePlugin,'deactivate']);

// //uninstall
// // register_uninstall_hook(__FILE__, [$modulePlugin,'uninstall']);
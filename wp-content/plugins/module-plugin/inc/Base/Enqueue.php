<?php
namespace Inc\Base;

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue']);
    }

    /**
     * Added custom css,js to admin dashboard
     */
    public function enqueue()
    {
        // Enqueue all scripts
        wp_enqueue_style('plugstyle', PLUGIN_URL . '/assets/style.css');
        wp_enqueue_script('plugscript', PLUGIN_URL . '/assets/script.js');
    }
}

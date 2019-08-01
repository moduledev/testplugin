<?php
namespace Inc\Base;

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'enqueue']);
    }

    public function enqueue()
    {
        // Enqueue all scripts
        wp_enqueue_style('plugstyle', SCRIPTS_PATH . '/assets/style.css');
        wp_enqueue_script('plugscript', SCRIPTS_PATH . '/assets/script.js');
    }
}

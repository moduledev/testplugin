<?php
namespace Inc\Base;

use Inc\Base\BaseController;

class Enqueue extends BaseController
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
        wp_enqueue_style('plugstyle', $this->pluginUrl . '/assets/adm-style.css');
        wp_enqueue_script('plugscript', $this->pluginUrl . '/assets/adm-script.js');
    }
}

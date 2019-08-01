<?php

namespace Inc\Base;

class SettingsLink
{
    public $pluginName;

    function __construct()
    {
        $this->pluginName = PLUGIN;
    }
    
    public function register()
    {
        add_filter("plugin_action_links_$this->pluginName", [$this, 'settings_link']);
    }

    public function settings_link($links)
    {
        $settings_link = '<a href="admin.php?page=module_plugin">settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}

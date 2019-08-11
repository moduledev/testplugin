<?php

namespace Inc\Pages;

use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;
use \Inc\Api\Callbacks\AdminCallbacks;
use \Inc\Api\Callbacks\WidjetsCallbacks;


class Admin extends BaseController
{
    public $settings;
    public $pages = [];
    public $subpages = [];
    public $callbacks;

    public function __construct()
    {
        parent::__construct();
        $this->settings = new SettingsApi();
        $this->callbacks = new AdminCallbacks();
    }

    public function register()
    {
        $this->setPages();
        $this->setSubPages();
        $this->setSettings();
        $this->setSections();
        $this->setFields();

        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

    protected function setPages()
    {
        $this->pages = [
            [
                'page_title' => 'Module Plugin',
                'menu_title' => 'Module',
                'capability' => 'manage_options',
                'menu_slug' => 'module_plugin',
                'callback' => [$this->callbacks, 'adminDashboard'],
                'icon_url' => 'dashicons-store',
                'position' => 110,

            ],
        ];
    }

    protected function setSubPages()
    {
        $this->subpages = [
            [
                'parent_slug' => 'module_plugin',
                'page_title' => 'Suct post type',
                'menu_title' => 'CTP',
                'capability' => 'manage_options',
                'menu_slug' => 'mod_ctp',
                'callback' => [$this->callbacks,'ctpDashboard'],
            ],
            [
                'parent_slug' => 'module_plugin',
                'page_title' => 'Suct post type',
                'menu_title' => 'Taxonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'mod_tax',
                'callback' => [$this->callbacks,'taxonomyDashboard'],
            ],
            [
                'parent_slug' => 'module_plugin',
                'page_title' => 'Suct post type',
                'menu_title' => 'Widjets',
                'capability' => 'manage_options',
                'menu_slug' => 'mod_widjet',
                'callback' => [$this->callbacks,'widjetDashboard'],
            ],
        ];
    }

    public function setSettings()
    {
        $args = [
            [
                'option_group' => 'module_option_group',
                'option_name' => 'text_example',
                'callback' => [$this->callbacks, 'ModuleOptionsGroup'], 
            ],
            [
                'option_group' => 'module_option_group',
                'option_name' => 'first_name',
            ],
        ];
        $this->settings->setSettings($args);
    }

    public function setSections()
    {
        $args = [
            [
                'id' => 'module_admin_index',
                'title' => 'Settings',
                'callback' => [$this->callbacks, 'moduleAdminSection'], 
                'page' => 'module_plugin',
            ],
            
        ];
        $this->settings->setSections($args);
    }

    public function setFields()
    {
        $args = [
            [
                'id' => 'text_example',
                'title' => 'Text example',
                'callback' => [$this->callbacks, 'moduleTextExample'], 
                'page' => 'module_plugin',
                'section' => 'module_admin_index',
                'args' => [
                    'label_for' => 'text_example',
                    'class' => 'example_class'
                ],    
            ],
            [
                'id' => 'first_name',
                'title' => 'First Name',
                'callback' => [$this->callbacks, 'moduleFirstName'], 
                'page' => 'module_plugin',
                'section' => 'module_admin_index',
                'args' => [
                    'label_for' => 'first_name',
                    'class' => 'example_class'
                ],    
            ],
        ];
        $this->settings->setFields($args);
    }
}

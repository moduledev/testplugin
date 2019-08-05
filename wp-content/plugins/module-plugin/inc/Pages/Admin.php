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
}

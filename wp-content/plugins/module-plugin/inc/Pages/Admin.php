<?php

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

class Admin extends BaseController
{
    public $settings;
    public $pages = [];
    public $subpages = [];


    public function __construct()
    {
        $this->settings = new SettingsApi();
        $this->pages = [
            [
                'page_title' => 'Module Plugin',
                'menu_title' => 'Module',
                'capability' => 'manage_options',
                'menu_slug' => 'module_plugin',
                'callback' => function () {
                    echo '<h1>Test1</h1>';
                },
                'icon_url' => 'dashicons-store',
                'position' => 110,

            ],
        ];
        $this->subpages = [
            [
                'parent_slug' => 'module_plugin',
                'page_title' => 'Suct post type',
                'menu_title' => 'CTP',
                'capability' => 'manage_options',
                'menu_slug' => 'mod_ctp',
                'callback' =>function () {
                    echo '<h1>CPT Manager</h1>';
                },
            ],
            [
                'parent_slug' => 'module_plugin',
                'page_title' => 'Suct post type',
                'menu_title' => 'Taxonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'mod_tax',
                'callback' =>function () {
                    echo '<h1>TTaxonomies Manager</h1>';
                },
            ],
            [
                'parent_slug' => 'module_plugin',
                'page_title' => 'Suct post type',
                'menu_title' => 'Widjets',
                'capability' => 'manage_options',
                'menu_slug' => 'mod_widjet',
                'callback' =>function () {
                    echo '<h1>Widjets Manager</h1>';
                },
            ],
        ];
    }

    public function register()
    {
        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }
}

<?php

namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{ 

    public function adminDashboard()
    {
        return require_once("$this->pluginPath/templates/Admin.php");
    }

    public function ctpDashboard()
    {
        return require_once("$this->pluginPath/templates/ctp-template.php");
    }

    public function taxonomyDashboard()
    {
        return require_once("$this->pluginPath/templates/taxonomies-template.php");
    }

    public function widjetDashboard()
    {
        return require_once("$this->pluginPath/templates/widjets-template.php");
    }
}



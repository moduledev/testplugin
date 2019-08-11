<?php

namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{ 

    public function adminDashboard()
    {
        return require_once("$this->pluginPath/templates/admin.php");
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

    public function moduleOptionsGroup($input)
    {
        return $input;
    }

    public function moduleAdminSection()
    {
        echo "Check section";
    }

    public function moduleTextExample()
    {
        $value = esc_attr(get_option('text_example'));
        echo '<input type="text" class="regular-text" name="text_example" value="'.$value.'" placeholder="write smth ...">';
    }

    public function moduleFirstName()
    {
        $value = esc_attr(get_option('first_name'));
        echo '<input type="text" class="regular-text" name="first_name" value="'.$value.'" placeholder="write Your First Name">';
    }
}



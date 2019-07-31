<?php

class ModulePluginDeactivate
{
    public static function deactivate(){
        flush_rewrite_rules();
    }
}
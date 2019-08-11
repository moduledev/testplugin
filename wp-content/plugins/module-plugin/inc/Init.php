<?php 

namespace Inc;

final class Init
{
    /**
     *  Array of services
     */
    public static function get_servises(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLink::class,
        ];
    }

    /**
     * Register services
     *
     * @return void
     */
    public static function register_servises(){
        foreach(self::get_servises() as $class){
            $service = self::instansiate($class);
            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    /**
     * Initiate passed class
     *
     * @param [type] $class
     */
    private static function instansiate($class){
        $service = new $class();
        return $service;
    }
}



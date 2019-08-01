<?php 

namespace Inc;

final class Init
{
    /**
     *  Array of services
     * @return array
     */
    public static function get_servises(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
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

    private static function instansiate($class){
        $service = new $class();
        return $service;
    }
}



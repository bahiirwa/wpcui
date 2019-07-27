<?php

namespace Inc;


final class Init
{

    public static function get_services()
    {
        return [
            Pages\Admin::class,
            Pages\Customizer::class,
            Base\SettingsLinks::class
        ];
    }

    public static function registerServices()
    {
        foreach (self::get_services() as $service_class) {
            $service = new $service_class();

            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

}
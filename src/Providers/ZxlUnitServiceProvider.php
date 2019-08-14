<?php

namespace Zxl\Unit\Providers;

class ZxlUnitServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function register()
    {
        $this->registerRoute();
        $this->loadViewsFrom(__DIR__."/../../resources/views","zxl");
    }

    public function boot()
    {

    }

    public function registerRoute()
    {
        \Route::group(
            $this->routeConfig(),
            function () {
                $this->loadRoutesFrom(__DIR__."/../Http/route.php");
            }
        );
    }

    public function routeConfig()
    {
        return [
            "namespace"  => "Zxl\\Unit\\Http\\Controllers",
            "middleware" => "web",
            "prefix"     => "zxl",
        ];
    }
}
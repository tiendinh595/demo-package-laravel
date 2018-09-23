<?php

/**
 * Created by PhpStorm.
 * User: Vũ Tiến Định
 * Date: 9/23/18
 * Time: 8:15 PM
 * Contact: tiendinh595@gmail.com
 */

namespace Dinhvt\Demo;

class DemoServiceProvider extends \Illuminate\Support\ServiceProvider
{

    function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'dinhvt-demo');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    function register()
    {
        $this->app->bind('demo', function () {
            return new Demo(__DIR__);
        });
    }

}
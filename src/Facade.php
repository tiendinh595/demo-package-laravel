<?php

/**
 * Created by PhpStorm.
 * User: Vũ Tiến Định
 * Date: 9/23/18
 * Time: 8:35 PM
 * Contact: tiendinh595@gmail.com
 */

namespace Dinhvt\Demo;

class Facade extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return 'demo';
    }
}
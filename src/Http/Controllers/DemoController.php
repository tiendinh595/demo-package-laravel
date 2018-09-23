<?php

/**
 * Created by PhpStorm.
 * User: Vũ Tiến Định
 * Date: 9/23/18
 * Time: 8:22 PM
 * Contact: tiendinh595@gmail.com
 */

namespace Dinhvt\Demo\Http\Controllers;

use App\Http\Controllers\Controller;

class DemoController extends Controller
{

    function getIndex() {
        echo \Demo::create();
        echo "<br>";
        return view('dinhvt-demo::index');
    }

}
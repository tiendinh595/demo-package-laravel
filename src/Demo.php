<?php

/**
 * Created by PhpStorm.
 * User: Vũ Tiến Định
 * Date: 9/23/18
 * Time: 8:37 PM
 * Contact: tiendinh595@gmail.com
 */

namespace Dinhvt\Demo;

class Demo
{
    function __construct($string)
    {
        print_r('__construct '.$string);
        echo '<br>';
        print_r(__CLASS__);
    }

    function create() {
        print_r(__METHOD__);
    }
}
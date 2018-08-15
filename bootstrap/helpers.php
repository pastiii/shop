<?php
/**
 * Created by PhpStorm.
 * User: zxq
 * Date: 2018/8/14
 * Time: 17:45
 */


/**
 * test demo
 * @return string
 */
function test_helpers() {
    return "It's OK";
}


function route_class() {
    return str_replace(".", "-", Route::currentRouteName());
}
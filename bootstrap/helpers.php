<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2020/2/10
 * Time: 10:01
 */
function route_class() {
    return str_replace('.', '-', Route::currentRouteName());
}
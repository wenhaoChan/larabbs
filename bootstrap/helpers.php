<?php
/**
 * Created by PhpStorm.
 * User: zero
 * Date: 2018/7/13
 * Time: 下午4:07
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
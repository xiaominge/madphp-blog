<?php

if(!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 系统配置
 * @author 徐亚坤 hdyakun@sina.com
 */

return array(
    // 应用URL
    'base_url' => 'http://www.jxwen.com/blog/',
    // 时区设置
    'timezone' => 'Asia/Shanghai',

    'charset' => 'UTF-8',

    'aliases' => array(
        'Format' => '\Madphp\Src\Core\Format',
        'View' => '\Madphp\Src\Core\View',
        'Route' => '\Madphp\Src\Core\Route',
        'Event' => '\Madphp\Src\Core\Event',
        'Config' => '\Madphp\Src\Core\Config',
        'Log' => '\Madphp\Src\Core\Log',
        'Page' => '\Madphp\Src\Library\Page',

        'DB' => '\Illuminate\Database\Capsule\Manager',
        'Eloquent' => '\Illuminate\Database\Eloquent\Model',
    ),
);
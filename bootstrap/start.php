<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 初始化
 * @author 徐亚坤 hdyakun@sina.com
 */

$config = [];

$config['app'] = import('configs.app', APP_PATH);

$aliases = $config['app']['aliases'];
foreach ($aliases as $class => $full_class) {
    class_alias($full_class, $class);
}
Config::get('constants');
// BASE_URL
define('BASE_URL', $config['app']['base_url']);
// TIME_ZONE
date_default_timezone_set($config['app']['timezone']);

$config['database'] = import('configs.database', APP_PATH);
// Eloquent ORM
$capsule = new DB();
$capsule->addConnection($config['database']['connection']);

$capsule->setEventDispatcher(new Illuminate\Events\Dispatcher(new Illuminate\Container\Container));
$capsule->setFetchMode($config['database']['fetch']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

if (!is_cli()) {
    // whoops
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}
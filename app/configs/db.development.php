<?php
        
$config['mysql']['charset'] = 'UTF8';
$config['mysql']['persistent'] = TRUE;
$config['mysql']['collation'] = 'utf8_unicode_ci';
$config['mysql']['timeout'] = 5;


$config['database']['blog']['username'] = 'root';
$config['database']['blog']['password'] = 'root';
$config['database']['blog']['write'] = 'localhost:3306';
$config['database']['blog']['read'] = 'localhost:3306';
$config['database']['blog']['dbname'] = 'blog';

return $config;

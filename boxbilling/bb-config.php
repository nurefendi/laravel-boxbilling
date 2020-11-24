<?php 
return array (
  'debug' => false,
  'salt' => 'de5f1361c1f714bb1778c5c6f649de60',
  'url' => 'http://localhost/BoxBilling/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => false,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/home/fendi/Documents/php-workspace/BoxBilling/bb-data',
  'path_logs' => '/home/fendi/Documents/php-workspace/BoxBilling/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => '127.0.0.1',
    'name' => 'boxbilling',
    'user' => 'root',
    'password' => '',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/home/fendi/Documents/php-workspace/BoxBilling/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);
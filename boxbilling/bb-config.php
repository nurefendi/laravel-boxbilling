<?php 
return array (
  'debug' => false,
  'salt' => 'de5f1361c1f714bb1778c5c6f649de60',
  'url' => 'http://localhost:8004',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => false,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/bb-data',
  'path_logs' => '/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'databases2',
    'name' => 'niagahoster2',
    'user' => 'root',
    'password' => 'niagahoster2',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/bb-data/cache',
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

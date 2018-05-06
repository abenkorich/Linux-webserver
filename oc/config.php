<?php
// HTTP
define('HTTP_SERVER', 'http://www.dzduino.com/');

// HTTPS
define('HTTPS_SERVER', 'https://www.dzduino.com/');

// For real customer IP
$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_X_REAL_IP'];

// DIR
define('DIR_ROOT', '/var/www/dzduinocom/public_html/');
define('DIR_APPLICATION', DIR_ROOT . '/catalog/');
define('DIR_SYSTEM', DIR_ROOT . 'system/');
define('DIR_IMAGE', DIR_ROOT . 'image/');
define('DIR_LANGUAGE', DIR_ROOT . 'catalog/language/');
define('DIR_TEMPLATE', DIR_ROOT . 'catalog/view/theme/');
define('DIR_CONFIG', DIR_ROOT . 'system/config/');
define('DIR_CACHE', DIR_ROOT . 'system/storage/cache/');
define('DIR_DOWNLOAD', DIR_ROOT . 'system/storage/download/');
define('DIR_LOGS', DIR_ROOT . 'system/storage/logs/');
define('DIR_MODIFICATION', DIR_ROOT . 'system/storage/modification/');
define('DIR_UPLOAD', DIR_ROOT . 'system/storage/upload/');

// DB
define('DB_DRIVER',   'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'dzd_oc');
define('DB_PASSWORD', 'Oc$Pwd$4$D');
define('DB_DATABASE', 'dzd_oc');
define('DB_PORT', '3306');
define('DB_PREFIX', 'dzs_');

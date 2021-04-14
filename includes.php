<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('PACKAGEPATH', __DIR__);

define('WEBURL', "http://{$_SERVER['HTTP_HOST']}/");




include(PACKAGEPATH . '/Boot.php');
include(PACKAGEPATH . '/packages/CSSPackage.php');
include(PACKAGEPATH . '/packages/JSPackage.php');

define('WEBROOT', "http://{$_SERVER['HTTP_HOST']}/");
<?php
session_start();
require_once("vendor/autoload.php");
ini_set('memory_limit', '3024M');

use Slim\Slim;


$app = new Slim();

require_once("site.php");
require_once("functions.php");
require_once("admin.php");
require_once("admin-categories.php");
require_once("admin-users.php");
require_once("admin-products.php");
require_once("admin-orders.php");

$app->run();






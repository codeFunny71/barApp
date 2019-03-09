<?php

/**
 * Marcus Absher
 * Date: 3-1-19
 * http://mabsher.greenriverdev.com/328/barApp/
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');
require_once 'model/database.php';
session_start();

$valid = false;
//create an instance of the Base class
$f3 = Base::instance();

//Turn on fat free error reporting
$f3->set('DEBUG', 3);

$data = new Database();
$dbh = $data->connect();
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config.php';
require '../src/Be2bill/Api/Autoloader.php';

Be2bill_Api_Autoloader::registerAutoloader();

// Just implement BE2BILL_IDENTIFIER and BE2BILL_PASSWORD as defined
$be2bill = Be2bill_Api_ClientBuilder::buildSandboxDirectLinkClient(BE2BILL_IDENTIFIER, BE2BILL_PASSWORD);

$result = $be2bill->refund('A151805', 'order-42', 'Refund transaction A151805', $options = array("AMOUNT" => "50"));

var_dump($result);

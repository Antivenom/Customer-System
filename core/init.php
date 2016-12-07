<?php
include_once 'functions/DB.php';

spl_autoload_register('autoLoader');

function autoLoader($className)
{
    $path = 'classes/';
    include $path.$className.'.php';

    echo ' <br >Loaded Class: ' . $className;
}

$cust = new Customers($db);
$allCustomers = $cust->getAll();
$sec = new Security();
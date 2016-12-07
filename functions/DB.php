<?php
try{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "global_data";

    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    if($db) {
        echo 'Connected';
    } else {
        echo 'NO CONNECTION';
    }
} catch(PDOException $e)
{
    exit('There seems to be something wrong with the Database: ' . $e->getMessage());
}
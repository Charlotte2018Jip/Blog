<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 29-1-2020
 * Time: 10:47
 */

$dbHost = "localhost";
$dbName = "blog";
$dbUser = "root";
$dbPass = "";

$db = new PDO(
    "mysql:host=$dbHost;dbname=$dbName",
    $dbUser,
    $dbPass
);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>

<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">

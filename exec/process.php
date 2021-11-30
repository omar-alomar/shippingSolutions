<?php

use function PHPSTORM_META\map;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli('localhost', 'root', 'root', 'shippingSolutions') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    //$status = $_POST['status'];
    //$date = $_POST['date'];
    //$driver = $_POST['driver'];

    $mysqli->query("INSERT INTO test (name) VALUES ('$name')") or die($mysqli->error);

}
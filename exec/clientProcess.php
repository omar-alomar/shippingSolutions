<?php

use function PHPSTORM_META\map;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connecting to SQL database
$mysqli = new mysqli('localhost', 'root', 'root', 'shippingSolutions') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = 'client';

    $mysqli->query("INSERT INTO users (name, address, username, password, type) 
    VALUES ('$name', '$address', '$username','$password', '$type')")
     or die($mysqli->error);
}

// TODO: header redirect breaks "new client" and "new order" buttons. Fix.
header("Location:exec.html#clients"); 
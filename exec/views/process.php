<?php

use function PHPSTORM_META\map;

$user = 'root';
$password = 'root';
$db = 'shippingSolutions';
$host = 'localhost';
$port = 88889;
$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if (isset($_POST['save'])){
    $name = $_POST['name'];
    //$address = $_POST['address'];
    //$status = $_POST['status'];
    //$date = $_POST['date'];
    //$driver = $_POST['driver'];

    $mysqli->query("INSERT INTO test (name) VALUES ('$name')") or die($mysqli->error);

}
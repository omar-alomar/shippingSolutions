<?php

use function PHPSTORM_META\map;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$username = '';
$password = '';

// Connecting to SQL database
$mysqli = new mysqli('localhost', 'root', 'root', 'shippingSolutions') or die(mysqli_error($mysqli));
$result = $mysqli->query(" SELECT * FROM users");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $mysqli->query(" SELECT id, username, password FROM users WHERE username = '$username' AND password='$password'");
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $_SESSION['permaUsername'] = $username;
    $_SESSION['permaId'] = $id;

    if (($row['username'] == $username) && $row['password'] == $password) {
        header("location: exec.php#deliveries");
    } else echo "fuck u";
}

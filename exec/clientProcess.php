<?php

use function PHPSTORM_META\map;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

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

     $_SESSION['message'] = "Client added successfully.";
     $_SESSION['msg_type'] = "success";
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id=$id") or die(mysqli_error($mysqli));

    $_SESSION['message'] = "Client has been deleted successfully.";
    $_SESSION['type'] = "danger";
}
?>
<script type="text/javascript">
    window.location.href = "exec.html#clients";
    window.location.replace("exec.html#clients");

</script>
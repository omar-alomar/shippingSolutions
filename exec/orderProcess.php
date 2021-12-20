<?php

use function PHPSTORM_META\map;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Connecting to SQL database
$mysqli = new mysqli('localhost', 'root', 'root', 'shippingSolutions') or die(mysqli_error($mysqli));
$result = $mysqli->query(" SELECT * FROM users");
$name = '';

if (isset($_POST['save'])) {
    $clientName = $_POST['clientName'];
    $result = $mysqli->query(" SELECT id FROM users WHERE name = '$clientName'");
    $row = $result->fetch_assoc();
    $clientId = $row['id'];

    $driverName = $_POST['driverName'];
    $result = $mysqli->query(" SELECT id FROM users WHERE name = '$driverName'");
    $row = $result->fetch_assoc();
    $driverId = $row['id'];

    $payload = $_POST['payload'];
    $status = $_POST['status'];
    $dateDelivered = $_POST['dateDelivered']; // TODO: allow null date input

    $mysqli->query("INSERT INTO orders (clientId, payload, status, dateDelivered, driverId) 
    VALUES ('$clientId', '$payload', '$status','$dateDelivered', '$driverId')")
        or die($mysqli->error);

    $_SESSION['display'] = false;
    header("location: exec.php#deliveries");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM orders WHERE id=$id") or die(mysqli_error($mysqli));
    $_SESSION['display'] = false;
    header("location: exec.php#deliveries");
}

if (isset($_GET['edit'])) {
    $_SESSION['display'] = true;
    $_SESSION['id'] = $_GET['edit'];
    header("location: exec.php#deliveries");
}
if (isset($_POST['update'])) {
    $clientName = $_POST['clientName'];
    $result = $mysqli->query(" SELECT id FROM users WHERE name = '$clientName'");
    $row = $result->fetch_assoc();
    $clientId = $row['id'];

    $driverName = $_POST['driverName'];
    $result = $mysqli->query(" SELECT id FROM users WHERE name = '$driverName'");
    $row = $result->fetch_assoc();
    $driverId = $row['id'];

    $payload = $_POST['payload'];
    $status = $_POST['status'];
    $dateDelivered = $_POST['dateDelivered']; // TODO: allow null date input
    $mysqli->query("UPDATE  orders SET clientId='$clientId', payload='$payload', status='$status', dateDelivered='$dateDelivered', driverId='$driverId' WHERE id='" . $_SESSION['id'] . "'") or die(mysqli_error($mysqli));
    $_SESSION['display'] = false;
    header("location: exec.php#deliveries");
}
if (isset($_POST['cancel'])) {
    $_SESSION['display'] = false;
    header("location: exec.php#deliveries");
}

?>


<!-- <script type="text/javascript">
    window.location.href = "exec.php#orders";
    window.location.replace("exec.php#orders");
</script> -->
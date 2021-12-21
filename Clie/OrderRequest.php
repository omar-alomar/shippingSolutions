<?php
include("config.php");
$result = mysqli_query($mysqli, "SELECT* from request ORDER by name DESC");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="styleSheet" href="sidebar.css">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="sidebar.js"></script>


    <title>Shipping Service Solutions</title>
</head>

<body>
    <div id="nav-placeholder"></div>
    <script>
        $(function() {
            $("#nav-placeholder").load("../common/nav.html");
        });
    </script>
    <h1>Shipping Solutions</h1>
    <h1>Client</h1>

    <form action="function.php" method="POST">
        Comppany Name<input type="text" name="name"><br>
        Address <input type="text" name="address"><br>
        Delivery Date<input type="date" name="dDate"><br>
        Load Type <select name="LoadType">
            <option>In</option>
            <option>Out</option>
        </select><br>
        Number of Loads <input type="number" name="LoadsNum"><br>
        <input type="submit" name="submit">
    </form>


    <table width="60%" border="2">
        <tr>
            <th>Customer Name</th>
            <th>Address</th>
            <th>Date</th>
            <th>Load Type</th>
            <th>Number of Loads</th>
        </tr>
        <?php

        while ($res = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo '<td>' . $res['name'] . '</td>';
            echo '<td>' . $res['address'] . '</td>';
            echo '<td>' . $res['dDate'] . '</td>';
            echo '<td>' . $res['LoadType'] . '</td>';
            echo '<td>' . $res['LoadsNum'] . '</td>';
            echo '/tr>';
        }
        ?>
    </table>
</body>

</html>
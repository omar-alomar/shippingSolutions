<?php
include("config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>

    </title>
</head>

<body>
    <form action="" method="POST">
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
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $dDate = $_POST['dDate'];
        $LoadType = $_POST['LoadType'];
        $LoadsNum = $_POST['LoadsNum'];

        $result = "INSERT into request (name,address,dDate,LoadType,LoadsNum) values('$name','$address','$dDate','$LoadType','$LoadsNum')";
        mysqli_query($mysqli, $result);
        if ($result) {
            echo "Success";
        } else {
            echo "Failed";
        }
    }
    ?>
</body>

</html>
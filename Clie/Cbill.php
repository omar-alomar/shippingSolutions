<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="styleSheet" href="sidebar.css">

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="sidebar.js"></script>


  <title>Shipping Service Solutions</title>
</head>

<body style="background-color: rgb(229, 238, 229)">


  <div id="nav-placeholder"></div>
  <script>
    $(function() {
      $("#nav-placeholder").load("../common/nav.html");
    });
  </script>
  <caption>My Bills</caption>
  <table width="60%" border="2">

    <tr>
      <th>Order Address </th>
      <th>Loads</th>
      <th>Type</th>
      <th>Amount due($)</th>
    </tr>
    <?php
    $sql = "SELECT address, LoadsNum, LoadType from request";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["address"] . "</td><td>" . $row["LoadsNum"] . "</td><td>" . $row["LoadType"] . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 result";
    }
    ?>

  </table>

</body>

</html>
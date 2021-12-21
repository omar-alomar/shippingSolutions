<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  />
  <link rel="styleSheet" href="sidebar.css" />

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
  <h1>Shipping Solutions</h1>
  <h1>Client</h1>

  <table width = "60%" border = "2">
    <caption>My Orders</caption>
    <tr>
      <th>Order Address </th>
      <th>Company</th>
      <th>Load Type</th>
      <th>Status</th>
    </tr>
    <tr>
      <td>york rd </th>
      <td>Towson trucking company</td>
      <td>Load in</td>
      <td>Complete</td>
    </tr>
    <tr>
      <td>university blvd</td>
      <td>UMD trucking company</td>
      <td>load out</td>
      <td>Pending</td>
    </tr>

  </table>

</body>

</html>
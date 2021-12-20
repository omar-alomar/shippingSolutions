<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Manage Orders</h2>
                <?php
                $mysqli = new mysqli('localhost', 'root', 'root', 'shippingSolutions') or die(mysqli_error($mysqli));
                $result = $mysqli->query(" SELECT * FROM orders ");
                ?>
                <?php require_once '../orderProcess.php'; ?>
                <a href="#orderEntry" class="btn btn-dark" role="button">New order</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Payload</th>
                            <th scope="col">Delivery Status</th>
                            <th scope="col">Delivery Date</th>
                            <th scope="col">Driver</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $mysqli->query(" SELECT
                        orders.id, 
                        users.name AS clientName,
                        users.address,
                        orders.payload,
                        orders.status,
                        orders.dateDelivered,
                        (SELECT name FROM users WHERE id=orders.driverId) AS driverName
                    FROM
                        orders
                    INNER JOIN users ON orders.clientId = users.id; ");
                        while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <!--TODO: FIGURE OUT FOREIGN KEYS-->
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['clientName']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['payload']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['dateDelivered']; ?></td>
                                <td><?php echo $row['driverName']; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <form action="orderProcess.php" method="get">
                                            <input type="hidden" name="edit" value="<?php echo $row['id']; ?>">
                                            <input type="submit" value="Edit" class="btn btn-secondary">
                                        </form>
                                        <a href="orderProcess.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">
                                            Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <?php
                function pre_r($array)
                {
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>';
                }
                ?>
            </div>

            <?php if ($_SESSION['display'] == true) : ?>
                <div class="container">
                    <h3>Edit Order <?php print_r($_SESSION['id']) ?> </h3>
                    <form action="orderProcess.php" method="POST">
                        <input type="hidden" name="id" class="form-control">
                        <div class="mb-3">
                            <label>Client:</label>
                            <select id="select" name="clientName" class="form-select">
                                <?php $result = $mysqli->query(" SELECT * FROM users WHERE type='client' "); ?>
                                <?php while ($row = $result->fetch_assoc()) : ?>
                                    <option><?php echo $row['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Payload:</label>
                            <input type="text" name="payload" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Delivery status:</label>
                            <select id="select" name="status" class="form-select">
                                <option>Pending</option>
                                <option>Delivered</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Delivery date:</label>
                            <input type="date" name="dateDelivered" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Driver:</label>
                            <select id="select" name="driverName" class="form-select">
                                <?php $result = $mysqli->query(" SELECT * FROM users WHERE type='driver' "); ?>
                                <?php while ($row = $result->fetch_assoc()) : ?>
                                    <option><?php echo $row['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark" name="update">Update</button>
                            <button type="submit" class="btn btn-secondary" name="cancel">Cancel</button>
                        </div>
                </div>
            <?php endif ?>
        </div>

    </div>
</body>
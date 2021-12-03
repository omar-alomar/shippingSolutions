<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
         <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                <h2>Manage Clients</h2>
                <?php 
                    $mysqli = new mysqli('localhost', 'root', 'root', 'shippingSolutions') or die(mysqli_error($mysqli));
                    $result = $mysqli->query(" SELECT * FROM users WHERE type='client' ");                   
                ?>
                <a href="#clientEntry" class="btn btn-dark" role="button">Add client</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Pending Orders</th>
                            <th scope="col">Delivered Orders</th>
                            <th scope="col">Modify/Delete</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php
                            while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['pendingOrders']; ?></td>
                            <td><?php echo $row['deliveredOrders']; ?></td>
                            <td>
                                <a href="#clientEntry?edit=<?php echo $row['id']; ?>" class="btn btn-secondary">
                                Edit</a>
                                <a href="clientProcess.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">
                                Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>  
                <?php
                    function pre_r($array) {
                        echo '<pre>';
                        print_r($array);
                        echo '</pre>';
                    }
                 ?> 
                </div>
            </div>
            
        </div>
    </body>
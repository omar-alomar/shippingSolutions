<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php require_once '../orderProcess.php'; ?>
    <?php $mysqli = new mysqli('localhost', 'root', 'root', 'shippingSolutions') or die(mysqli_error($mysqli)); ?>

    <div class="container">
        <h2>New Order</h2>
        <form action="orderProcess.php" method="POST">
            <div class="mb-3">
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
                    <button type="submit" class="btn btn-dark" name="save">Submit</button>
                    <a href="#deliveries"><button type="button" class="btn btn-secondary">Back</button></a>
                </div>
            </div>

    </div>
    </form>
    </div>
</body>

</html>
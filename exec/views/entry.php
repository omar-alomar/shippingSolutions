<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once 'process.php'; ?> 
        <div class="container">
            <form action="process.php" method="POST">
                <div class="mb-3">
                    <div class="mb-3">
                    <label>Customer name:</label>
                    <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label>Address:</label>
                    <input type="text" name="address" class="form-control">
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
                    <input type="text" name="date" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label>Driver:</label>
                    <?php 

                    ?>
                    </div>
                    <div class="mb-3">
                    <button type="submit" class="btn btn-dark" name="save">Submit</button>
                    </div>
                    </div>


                </div>
            </form>
        </div>
    </body>
</html>
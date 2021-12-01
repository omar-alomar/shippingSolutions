<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once '../clientProcess.php'; ?> 
        <div class="container">
            <h2>New Client</h2>
            <form action="clientProcess.php" method="POST">
                <div class="mb-3">
                    <div class="mb-3">
                    <label>Client:</label>
                    <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label>Address:</label>
                    <input type="text" name="address" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label>Password:</label>
                    <input type="text" name="password" class="form-control">
                    </div>
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
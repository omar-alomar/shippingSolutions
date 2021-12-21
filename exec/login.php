<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>

<body>
    <!--navbar-->
    <div id="nav-placeholder"></div>
    <script>
        $(function() {
            $("#nav-placeholder").load("../common/nav.html");
        });
    </script>
    <!--end of navbar-->


    <?php require_once 'loginProcess.php'; ?>
    <div class="container">
        <h2>Log In:</h2>
        <form action="loginProcess.php" method="POST">
            <div class="mb-3">
                <div class="mb-3">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Password:</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark" name="login">Login</button>
                <a href="../index.html"><button type="button" class="btn btn-danger">Cancel</button></a>
            </div>
    </div>
</body>

</html>
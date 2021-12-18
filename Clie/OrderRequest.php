<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="styleSheet" href="sidebar.css">
    <script src="sidebar.js"></script>
    <title>SHipping Service Solutions</title>
</head>

<body>
    <!--navbar-->
    <div id="nav-placeholder"></div>
    <script>
        $(function() {
            $("#nav-placeholder").load("common/nav.html");
        });
    </script>
    <!--end of navbar-->

    <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <div class="sidebar-header">
                        <div class="sidebar-brand">
                            <a href="#"><img src="../img/logoTrans.png" width="150" height="60" alt=""></a>
                        </div>
                    </div>
                    <li><a href="#deliveries">Deliveries</a></li>
                    <li><a href="#reports">Generate report</a></li>
                    <li><a href="#payroll">Payroll</a></li>
                    <li><a href="#account">My account</a></li>
                    <li><a href="#clients">Manage clients</a></li>
                </ul>
            </nav>
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Request Order</h2>
                <a href="#orderEntry" class="btn btn-dark" role="button">New order</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Address</th>
                            <th scope="col">Type(In/Out)</th>
                            <th scope="col">Number of Loads</th>
                            <th scope="col">ID</th>
                            <th scope="col">Confirm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>york road</td>
                            <td>Out</td>
                            <td>5</td>
                            <td>1231231</td>
                            <td><button class="Confirm">Confirm Order</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="styleSheet" href="sidebar.css">

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="sidebar.js"></script>


    <title>Shipping Service Solutions</title>
</head>

<body>
    <!--NOTE TO SELF: FIX BOOTSTRAP COLLAPSE BUG-->

    <!--navbar-->
    <div id="nav-placeholder"></div>
    <script>
        $(function () {
            $("#nav-placeholder").load("../common/nav.html");
        });
    </script>
    <!--end of navbar-->

    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="sidebar-header">
                    <div class="sidebar-brand">
                        <a href="#"><img src="../img/logoTrans.png" width="150" height="60" alt=""></a></div>
                </div>
                <li><a href="#deliveries">Deliveries</a></li>
                <li><a href="#reports">Generate report</a></li>
                <li><a href="#payroll">Payroll</a></li>
                <li><a href="#account">My account</a></li>
                <li><a href="#clients">Manage clients</a></li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>


            <!--This "app" div is where js loads each pages contents:-->
            <div id="app"></div>
            <script src="js/route.js"></script>
            <script src="js/router.js"></script>
            <script src="js/app.js"></script>

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    </div>
    </div>
</body>

</html>
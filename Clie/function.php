><?php
    include("config.php");
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $dDate = $_POST['dDate'];
        $LoadType = $_POST['LoadType'];
        $LoadsNum = $_POST['LoadsNum'];

        $result = "INSERT into request (name,address,dDate,LoadType,LoadsNum) values('$name','$address','$dDate','$LoadType','$LoadsNum')";
        mysqli_query($mysqli, $result);

        if ($result) {
            header("location:OrderRequest.php");
        }
    }
    ?>
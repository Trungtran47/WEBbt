<?php
    $server = $_SERVER['SERVE_NAME'];
    $user = "root";
    $pass = " ";
    $db = "udn";
    $con = mysqli_connect($server, $user, $pass, $db);
    mysqli_query($con, "set names 'utf8");
?>
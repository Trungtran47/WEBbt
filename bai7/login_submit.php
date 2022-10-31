<?php
   section_start();
   include 'config.php';
   if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '') {
    $username = $_POST["username"];
    $password = $_POST["passwoed"];
    $password = md5($password);
    $sql = "SELECT * FROM user Where username='$username' AND password='$password' ";
    $user = mysqli_query($conn, $sql);
    if( mysqli_num_rows($user) > 0) {
        $_SESSION["user"] = $username;
    }else {
        echo "Ban da nhap sai username hoac password";
    }
}else {
        header("location: login.php");
    }
   
?>
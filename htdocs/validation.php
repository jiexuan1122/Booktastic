<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'user_signup');

$name = $_POST['name'];
$pass = $_POST['psw'];

$s = " select * from user_table where name = '$name' && psw = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['name'] = $name;
    header('location: home.php');
} else {
    header('location: login.html');
}

?>
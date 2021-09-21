<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'user_signup');

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['psw'];

$s = " select * from user_table where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username already taken";
} else {
    $reg = "insert into user_table(name, email, psw) values ('$name', '$email', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration successful!";
    header('location:login.html');
}
?>
<?php
 
define('HOST', 'localhost'); 
define('USER', 'root'); 
define('PASSWORD', ''); 
define('DATABASE', 'products'); 
 
function DB()
{
    $con = new mysqli(HOST, USER, PASSWORD, DATABASE);
 
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
 
    return $con;
}
?>
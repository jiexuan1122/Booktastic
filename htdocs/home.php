<?php

session_start();
if(!isset($_SESSION['name'])) {
    header('location: login.html');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Booktastic - Home
        </title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        
    </head>

    <body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="booktastic.png" height="150" weight="150" alt="Booktastic Logo" style="margin:20px">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html" class="buttons">Home</a></li>
                    <li><a href="signup.html" class="buttons">Sign Up</a></li>
                    <li><a href="contact.html" class="buttons">Contact</a></li>
                    <li><a href="cart.html" class="buttons">Cart</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <hr>

    <a href="logout.php"> LOGOUT </a>
    
    <h1><span style="background-color: cornsilk;">Welcome <?php echo $_SESSION['name']; ?></span></h1>
</body>
</html>
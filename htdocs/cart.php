<?php
 
session_start();
 
require __DIR__ . '/library.php';
 
$app = new ShopingCart();
 
if(isset($_POST['add_to_cart']))
{
    $app->addToCart($_POST['item_number']);
}
 
if (isset($_GET['id_to_remove']) && isset($_GET['id_to_remove']) != '') {
    $app->removeProductFromCart($_GET['id_to_remove']);
}
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Booktastic - Cart
        </title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="cart.css">
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
                        <li><a href="cart.php" class="buttons">Cart</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <hr>

        <div class="cont">      
      
            <div class="card">
             <h2 class="card-header">My Cart</h2>
                 <div class="card-body">
      
                     <?php
                         if(isset($_SESSION['shopping_cart']) && count($_SESSION['shopping_cart']) > 0)
                         {
                             $products = $_SESSION['shopping_cart'];
      
                             echo '
                                     <table border="2" class="table table-hover table-bordered">
                                     <thead>
                                         <tr>
                                         <th scope="col">ID</th>
                                         <th scope="col" width="100">Action</th>
                                         </tr>
                                     </thead>';
      
                             $item_number = 1;        
                             $total = 0;
                             foreach ($products as $product) {
                             echo '
                                     <tbody>
                                         <tr>
                                         <th scope="row">'. $item_number .'</th>
                                         <td>
                                             <a href="cart.php?id_to_remove=' . $item_number . '" class="btn btn-danger btn-sm">Remove</a>
                                         </td>
                                         </tr>
                                     </tbody>
                                ';
                                   
                             }
                                 
                         }
                         else {
                             echo '<div class="alert alert-primary" role="alert">
                                   Shopping cart is empty, visit <a href="index.html" class="alert-link">products</a> page to add product into shopping cart.
                                 </div>';
                         }
                     ?>
                     
                 </div>

                  <div>
                     <button>Checkout</button>
                 </div>
             </div>
      
         </div>
               
    </body>
</html>
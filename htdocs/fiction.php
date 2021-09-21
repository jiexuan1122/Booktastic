<?php
 
session_start();
 
require __DIR__ . '/library.php';
 
$app = new ShopingCart();
 
$products = $app->getProducts();
 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Booktastic - Fiction Section
        </title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="fiction.css">
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


        <div class="product">
            <div class="fiction">
                <img src="fiction_cover.png" alt="The Great Gatsby" style="width:100%;height:400px">
                <h1>The Great Gatsby</h1>
                <p class="price">RM49.99</p>
                <p>The young and mysterious millionaire Jay Gatsby and his quixotic passion and obsession to reunite with his ex-lover, the beautiful former debutante Daisy Buchanan. </p>
                <?php
                echo 
                '<form method="post" action="cart.php"">
                <input type="hidden" value="add_to_cart" name="add_to_cart">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>'
                ?>
            </div>

            <div class="fiction">
                <img src="fiction1.png" alt="The Handmaid's Tale" style="width:100%;height:400px">
                <h1>The Handmaid's Tale</h1>
                <p class="price">RM32.00</p>
                <p>The novel explores themes of subjugated women in a patriarchal society and the various means by which they resist and attempt to gain individuality and independence. </p>
                <?php
                echo 
                '<form method="post" action="cart.php"">
                <input type="hidden" value="add_to_cart" name="add_to_cart">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>'
                ?>            
            </div>

            <div class="fiction">
                <img src="fiction2.png" alt="The Anubis Gate" style="width:100%;height:400px">
                <h1>The Anubis Gate</h1>
                <p class="price">RM40.00</p>
                <p>The novel intertwines a number of real events into the story such as the massacre of the Mamluk beys by Muhammad Ali in 1811 and the failed rebellion by James, Duke of Monmouth against James II in the 1680s. </p>
                <?php
                echo 
                '<form method="post" action="cart.php"">
                <input type="hidden" value="add_to_cart" name="add_to_cart">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>'
                ?>
            </div>
        </div>


    </body>
</html>
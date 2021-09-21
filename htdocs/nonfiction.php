<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Booktastic - Non-Fiction Section
        </title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="nonfiction.css">
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
            <div class="nonfiction">
                <img src="nonfiction_cover.png" alt="Bury My Heart At Wounded Knee" style="width:100%;height:400px">
                <h1>Bury My Heart At Wounded Knee</h1>
                <p class="price">RM34.99</p>
                <p>The book expresses details of the history of American expansionism from a point of view that is critical of its effects on the Native Americans. </p>
                <?php
                echo 
                '<form method="post" action="cart.php"">
                <input type="hidden" value="add_to_cart" name="add_to_cart">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>'
                ?>
            </div>

            <div class="nonfiction">
                <img src="nonfiction1.png" alt="The Mismeasure of Man" style="width:100%;height:400px">
                <h1>The Mismeasure of Man</h1>
                <p class="price">RM23.55</p>
                <p>The book is both a history and critique of the statistical methods and cultural motivations underlying biological determinism. </p>
                <?php
                echo 
                '<form method="post" action="cart.php"">
                <input type="hidden" value="add_to_cart" name="add_to_cart">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>'
                ?>
            </div>

            <div class="nonfiction">
                <img src="nonfiction2.png" alt="The Road to Middle-Earth" style="width:100%;height:400px">
                <h1>The Road to Middle-Earth</h1>
                <p class="price">RM43.30</p>
                <p>The book discusses Tolkien's inspiration in creating the world of Middle-earth and the writing of works including The Hobbit, The Lord of the Rings, and The Silmarillion. </p>
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
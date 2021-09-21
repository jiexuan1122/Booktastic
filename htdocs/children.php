<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Booktastic - Children Section
        </title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="children.css">
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
            <div class="children">
                <img src="children_cover.png" alt="The Wonderful Wizard of Oz" style="width:100%;height:400px">
                <h1>The Wonderful Wizard of Oz</h1>
                <p class="price">RM39.99</p>
                <p>The story chronicles the adventures of a young farm girl named Dorothy in the magical Land of Oz, after she and her pet dog Toto are swept away from their Kansas home by a cyclone. </p>
                <?php
                echo 
                '<form method="post" action="cart.php"">
                <input type="hidden" value="add_to_cart" name="add_to_cart">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>'
                ?>
            </div>

            <div class="children">
                <img src="children1.png" alt="The Polar Express" style="width:100%;height:400px">
                <h1>The Polar Express</h1>
                <p class="price">RM29.99</p>
                <p>The Polar Express races north over mountains and through boreal forests inhabited by timber wolves as well as rabbits, but the train never slows down. When it arrives at the North Pole, the conductor explains that Santa will select one of them to receive the first gift of Christmas. The book is now widely considered to be a classic Christmas story for young children. </p>
                <?php
                echo 
                '<form method="post" action="cart.php"">
                <input type="hidden" value="add_to_cart" name="add_to_cart">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>'
                ?>
            </div>

            <div class="children">
                <img src="children2.png" alt="The Paper Bag Princess" style="width:100%;height:400px">
                <h1>The Paper Bag Princess</h1>
                <p class="price">RM24.00</p>
                <p>Princess Elizabeth is excited to marry dreamy Prince Ronald, but then a dragon attacks the castle, kidnaps her prince, and burns all her clothes. In resourceful and humorous fashion, Elizabeth dons a paper bag, finds and outsmarts the dragon, and rescues Ronald—who is less than pleased at her unprincesslike appearance. What’s a modern-day princess to do? </p>
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
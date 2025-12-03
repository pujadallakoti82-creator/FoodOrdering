<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foods - FoodieUs</title>

    <!-- CSS same as index page -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

   <!-- HEADER -->
<header class="nav">
    <div class="logo">
        <h1>Foodie<b>Us</b></h1>
    </div>

    <nav>
       <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php" class="active">Menu</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="auth-buttons">
        <a href="cart.php" class="cart-icon">
            <i class="fa fa-shopping-cart"></i>
            <span class="cart-value"><?php echo isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0; ?></span>
        </a>
        <button class="signin" onclick="signin()">Sign In</button>
        <button class="signup" onclick="signup()">Sign Up</button>
    </div>
</header>



<!-- FOOD MENU SECTION -->
<section class="food-menu">
    <div class="container">
        <h2 class="text-center">Our Menu</h2>

        <!-- CARD 1 -->
        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="image/burger.jpg" class="img-responsive img-curve" alt="Chicken Burger">
            </div>

            <div class="food-menu-desc">
                <h4>Chicken Burger</h4>
                <p class="food-price">$10.99</p>
                <p class="food-detail">Tasty food on the way</p>
                <br>

                <form method="post">
                    <input type="hidden" name="item_id" value="1">
                    <input type="number" name="quantity" value="1" min="1" style="width:60px;">
                    <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                  <a href="order.html" class="price">Order Now</a>
           
                </form>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="image/pizza.jpg" class="img-responsive img-curve" alt="Cheese Pizza">
            </div>

            <div class="food-menu-desc">
                <h4>Cheese Pizza</h4>
                <p class="food-price">$12.99</p>
                <p class="food-detail">Freshly baked with love</p>
                <br>

                <form method="post">
                    <input type="hidden" name="item_id" value="2">
                    <input type="number" name="quantity" value="1" min="1" style="width:60px;">
                    <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                  <a href="order.html" class="price">Order Now</a>

                </form>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="image/pasta.jpg" class="img-responsive img-curve" alt="Italian Pasta">
            </div>

            <div class="food-menu-desc">
                <h4>Italian Pasta</h4>
                <p class="food-price">$11.99</p>
                <p class="food-detail">Delicious and creamy</p>
                <br>

                <form method="post">
                    <input type="hidden" name="item_id" value="3">
                    <input type="number" name="quantity" value="1" min="1" style="width:60px;">
                    <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                <a href="order.html" class="price">Order Now</a>

                </form>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="image/sandwich.jpg" class="img-responsive img-curve" alt="Veg Sandwich">
            </div>

            <div class="food-menu-desc">
                <h4>Veg Sandwich</h4>
                <p class="food-price">$9.99</p>
                <p class="food-detail">Healthy and tasty</p>
                <br>

                <form method="post">
                    <input type="hidden" name="item_id" value="4">
                    <input type="number" name="quantity" value="1" min="1" style="width:60px;">
                    <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                 <a href="order.html" class="price">Order Now</a>

                </form>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="image/chocolatecoffee.jpg" class="img-responsive img-curve" alt="Chocolate Coffee">
            </div>

            <div class="food-menu-desc">
                <h4>Chocolate Coffee</h4>
                <p class="food-price">$9.99</p>
                <p class="food-detail">Hot and tasty</p>
                <br>

                <form method="post">
                    <input type="hidden" name="item_id" value="5">
                    <input type="number" name="quantity" value="1" min="1" style="width:60px;">
                    <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                 <a href="order.html" class="price">Order Now</a>

                </form>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="image/momo.jpg" class="img-responsive img-curve" alt="Momo">
            </div>

            <div class="food-menu-desc">
                <h4>Momo</h4>
                <p class="food-price">$9.99</p>
                <p class="food-detail">Healthy and tasty</p>
                <br>

                <form method="post">
                    <input type="hidden" name="item_id" value="6">
                    <input type="number" name="quantity" value="1" min="1" style="width:60px;">
                    <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                     <a href="order.html" class="price">Order Now</a>

                </form>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</section>

<!-- FOOTER -->
<section class="footer">
    <div class="container text-center">
        <p>All rights reserved. Designed By <a href="#">FoodieUs Team</a></p>
    </div>
</section>

<script src="main.js"></script>


</body>
</html>

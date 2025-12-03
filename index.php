<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/StyleIndex.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>FoodieUs</title>
</head>
<body>


    <!-- HEADER -->
<header class="nav">
    <div class="logo"><h1>Foodie<b>Us</b></h1></div>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="auth-buttons">

     <!-- CART BUTTON -->
    <button class="cart">
        <i class="fa fa-shopping-cart"></i> Cart
    </button>

        <button class="signin" onclick="signin()">Sign In</button>
        <button class="signup" onclick="signup()">Sign Up</button>
    </div>
</header>

<!-- HERO SECTION -->
<section class="hero">
    <div class="content-left">
        <h2>Order Your Best <br> Food Anytime</h2>
        <p>Hey, our delicious food is waiting for you. We deliver fresh items right to your doorstep.</p>
        <button class="explore-btn" onclick="window.location.href='menu.php'">Explore Food</button>
        <a href="menu.php" ></a>
    </div>
    <div class="content-right">
        <img src="image/image1.png" alt="Delicious Food" class="hero-img">
    </div>
</section>

<!-- POPULAR DISHES -->
<section class="category">
    <h3>Popular Dishes</h3>
    
    <div class="card-list">

        
        <div class="card" onclick="window.location.href='menu.php'">
         <img src="image/burger.jpg" alt="Chicken Burger">
         <h4>Chicken Burger</h4>
        <p>Tasty food on the way</p>
        </div>


        
        <div class="card" onclick="window.location.href='menu.php'">
            <img src="image/pizza.jpg" alt="Cheese Pizza">
            <h4>Cheese Pizza</h4>
            <p>Freshly baked with love</p>
        </div>
       

            <div class="card" onclick="window.location.href='menu.php'">
            <img src="pasta.jpg" alt="Italian Pasta">
            <h4>Italian Pasta</h4>
            <p>Delicious and creamy</p>
        </div>
        

       
            <div class="card" onclick="window.location.href='menu.php'">
            <img src="image/sandwich.jpg" alt="Veg Sandwich">
            <h4>Veg Sandwich</h4>
            <p>Healthy and tasty</p>
        </div>
       

      
         <div class="card" onclick="window.location.href='menu.php'">
            <img src="image/chocolatecoffee.jpg" alt="Chocolate Coffee">
            <h4>Chocolate Coffee</h4>
            <p>Hot</p>
        </div>
    

     
         <div class="card" onclick="window.location.href='menu.php'">
            <img src="image/momo.jpg" alt="Momo">
            <h4>Momo</h4>
            <p>Healthy and tasty</p>
        </div>
        

    </div>
</section>



 <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">FoodieUs Team</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->


<script src="main.js"></script>

</body>
</html>

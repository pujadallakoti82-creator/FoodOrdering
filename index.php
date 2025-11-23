<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/StyleIndex.css?v=<?php echo time(); ?>">
    <title>FoodieUs</title>
</head>
<body>

    <!-- HEADER -->
<header class="nav">
    <div class="logo"><h1>Foodie<b>Us</b></h1></div>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="user/menu.php">Menu</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="auth-buttons">
        <button class="signin" onclick="signin()">Sign In</button>
        <button class="signup" onclick="signup()">Sign Up</button>
    </div>
</header>

<!-- HERO SECTION -->
<section class="hero">
    <div class="content-left">
        <h2>Order Your Best <br> Food Anytime</h2>
        <p>Hey, our delicious food is waiting for you. We deliver fresh items right to your doorstep.</p>
        <button class="explore-btn">Explore Food</button>
    </div>
    <div class="content-right">
        <img src="assets/images/image1.png" alt="Delicious Food" class="hero-img">
    </div>
</section>

<!-- POPULAR DISHES -->
<section class="category">
    <h3>Popular Dishes</h3>
    <div class="card-list">
        <div class="card">
            <img src="assets/images/burger.jpg" alt="Chicken Burger">
            <h4>Chicken Burger</h4>
            <p>Tasty food on the way</p>
            <div class="price">$10.99 <span>+</span></div>
        </div>
        <div class="card">
            <img src="assets/images/pizza.jpg" alt="Cheese Pizza">
            <h4>Cheese Pizza</h4>
            <p>Freshly baked with love</p>
            <div class="price">$12.99 <span>+</span></div>
        </div>
        <div class="card">
            <img src="assets/images/pasta.jpg" alt="Italian Pasta">
            <h4>Italian Pasta</h4>
            <p>Delicious and creamy</p>
            <div class="price">$11.99 <span>+</span></div>
        </div>
        <div class="card">
            <img src="assets/images/sandwich.jpg" alt="Veg Sandwich">
            <h4>Veg Sandwich</h4>
            <p>Healthy and tasty</p>
            <div class="price">$9.99 <span>+</span></div>
        </div>
        <div class="card">
            <img src="assets/images/chocolatecoffee.jpg" alt="Chocolate Coffee">
            <h4>Chocolate Coffee</h4>
            <p>Hot</p>
            <div class="price">$9.99 <span>+</span></div>
        </div>
        <div class="card">
            <img src="assets/images/momo.jpg" alt="Momo">
            <h4>Momo</h4>
            <p>Healthy and tasty</p>
            <div class="price">$9.99 <span>+</span></div>
        </div>
    </div>
</section>

<script src="assets/js/main.js"></script>
<script>
function signin() {
     window.location.href = "../login.php";
     }
function signup() { 
    window.location.href = "../register.php"; 
    }
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - FoodieUs</title>
    <link rel="stylesheet" href="../assets/css/StyleIndex.css?v=<?php echo time(); ?>">
</head>
<body>

<?php
session_start();
$conn = mysqli_connect("localhost","root","","food_db");
$user_id = $_SESSION['user_id'] ?? 1;

if(isset($_POST['add_to_cart'])){
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    $added_at = date("Y-m-d H:i:s");
    mysqli_query($conn, "INSERT INTO cart (user_id, item_id, quantity, added_at) VALUES ('$user_id','$item_id','$quantity','$added_at')");
    header("Location: menu.php");
    exit();
}

$result = mysqli_query($conn, "SELECT SUM(quantity) as total FROM cart WHERE user_id='$user_id'");
$row = mysqli_fetch_assoc($result);
$cart_count = $row['total'] ?? 0;
?>

<!-- HEADER -->
<header class="nav">
    <div class="logo"><h1>Foodie<b>Us</b></h1></div>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a class="active" href="menu.php">Menu</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="auth-buttons">
        <button class="signin" onclick="signin()">Sign In</button>
        <button class="signup" onclick="signup()">Sign Up</button>
        <a href="cart.php" class="cart-icon">
            <img src="../assets/images/cart.png" alt="Cart" style="width:30px;height:30px;">
            <span id="cart-count"><?php echo $cart_count; ?></span>
        </a>
    </div>
</header>

<section class="menu-section">
    <h2>Our Full Menu</h2>
    <p>Choose from our delicious dishes below!</p>

    <div class="card-list">
        <div class="card">
            <img src="../assets/images/burger.jpg" alt="Chicken Burger">
            <h4>Chicken Burger</h4>
            <p>Tasty food on the way</p>
            <div class="price">$10.99</div>
            <form method="post" action="">
                <input type="hidden" name="item_id" value="1">
                <input type="number" name="quantity" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="../assets/images/pizza.jpg" alt="Cheese Pizza">
            <h4>Cheese Pizza</h4>
            <p>Freshly baked with love</p>
            <div class="price">$12.99</div>
            <form method="post" action="">
                <input type="hidden" name="item_id" value="2">
                <input type="number" name="quantity" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="../assets/images/pasta.jpg" alt="Italian Pasta">
            <h4>Italian Pasta</h4>
            <p>Delicious and creamy</p>
            <div class="price">$11.99</div>
            <form method="post" action="">
                <input type="hidden" name="item_id" value="3">
                <input type="number" name="quantity" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="../assets/images/sandwich.jpg" alt="Veg Sandwich">
            <h4>Veg Sandwich</h4>
            <p>Healthy and tasty</p>
            <div class="price">$9.99</div>
            <form method="post" action="">
                <input type="hidden" name="item_id" value="4">
                <input type="number" name="quantity" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="../assets/images/chocolatecoffee.jpg" alt="Chocolate Coffee">
            <h4>Chocolate Coffee</h4>
            <p>Hot and tasty</p>
            <div class="price">$9.99</div>
            <form method="post" action="">
                <input type="hidden" name="item_id" value="5">
                <input type="number" name="quantity" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>

        <div class="card">
            <img src="../assets/images/momo.jpg" alt="Momo">
            <h4>Momo</h4>
            <p>Healthy and tasty</p>
            <div class="price">$9.99</div>
            <form method="post" action="">
                <input type="hidden" name="item_id" value="6">
                <input type="number" name="quantity" value="1" min="1" style="width:50px;">
                <button type="submit" name="add_to_cart">Add to Cart</button>
            </form>
        </div>
    </div>
</section>

<script src="../assets/js/main.js"></script>
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




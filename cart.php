<?php
session_start();
include "../includes/db.php";
include "../includes/header.php";

// Initialize cart if not exists
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

// Add to cart
if(isset($_POST['add_to_cart'])){
    $food_id = $_POST['food_id'];
    $quantity = $_POST['quantity'];

    if(isset($_SESSION['cart'][$food_id])){
        $_SESSION['cart'][$food_id] += $quantity;
    } else {
        $_SESSION['cart'][$food_id] = $quantity;
    }
    header("Location: cart.php");
}

// Remove from cart
if(isset($_GET['remove'])){
    $food_id = $_GET['remove'];
    unset($_SESSION['cart'][$food_id]);
    header("Location: cart.php");
}

// Fetch food items in cart
$cart_items = [];
$total = 0;
if(!empty($_SESSION['cart'])){
    $ids = implode(",", array_keys($_SESSION['cart']));
    $res = mysqli_query($conn, "SELECT * FROM food_items WHERE id IN ($ids)");
    while($row = mysqli_fetch_assoc($res)){
        $row['quantity'] = $_SESSION['cart'][$row['id']];
        $row['subtotal'] = $row['quantity'] * $row['price'];
        $total += $row['subtotal'];
        $cart_items[] = $row;
    }
}
?>
<div class="category">
    <h3>Your Cart</h3>
    <?php if(!empty($cart_items)): ?>
        <table border="1" cellpadding="10" style="width:100%; text-align:center;">
            <tr>
                <th>Food</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
            <?php foreach($cart_items as $item): ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td>$<?php echo $item['price']; ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>$<?php echo $item['subtotal']; ?></td>
                <td><a href="cart.php?remove=<?php echo $item['id']; ?>">Remove</a></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3"><strong>Total</strong></td>
                <td colspan="2"><strong>$<?php echo $total; ?></strong></td>
            </tr>
        </table>
        <br>
        <a href="checkout.php"><button>Checkout</button></a>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</div>
<?php include "../includes/footer.php"; ?>

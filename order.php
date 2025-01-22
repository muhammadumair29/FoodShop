<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a class="logo" href="#">
                <img alt="Logo of the restaurant, a stylized fork and knife crossed over a plate"
                    src="Logo of the restaurant, a stylized fork and knife crossed over a plate.jpg" />
                <span>
                    Umair FoodShop
                </span>
            </a>
            <div class="menu">
                <a href="#">
                    Home
                </a>
                <a href="#">
                    Menu
                </a>
                <a href="#">
                    About
                </a>
                <a href="#">
                    Contact
                </a>
            </div>
            <div class="menu-button">
                <i class="fas fa-bars">
                </i>
            </div>
        </div>
    </nav>
    <form action="" method="post">
    <div class="order-form" id="orderForm">
        <h2>
            Place Your Order
        </h2>
        <input id="name" placeholder="Your Name" type="text" name="name" />
        <input id="email" placeholder="Your Email" type="email" name="email" />
        <input id="contact" placeholder="Your Contact No." type="contact" name="contact" />
        <input id="address" placeholder="Your Address" type="address" name="address" />
        <input id="city" placeholder="Your City" type="city" name="city" />
        <input id="zip" placeholder="Your Zip Code" type="zip" name="zip" />
        <input id="card" placeholder="Your Card No." type="card" name="card" />
        
        <button onclick="proceedToPay()" name="order" class="btn" type="submit">
            Proceed to Pay
        </button>
        </form>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <a class="logo" href="#">
                <img alt="Logo of the restaurant, a stylized fork and knife crossed over a plate"
                    src="Logo of the restaurant, a stylized fork and knife crossed over a plate.jpg" />
                <span>
                    Umair FoodShop
                </span>
            </a>
            <div class="social-icons">
                <a href="#">
                    <i class="fab fa-facebook-f">
                    </i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter">
                    </i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram">
                    </i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin-in">
                    </i>
                </a>
            </div>
        </div>
        <p>
            © 2023 Umair FoodShop. All rights reserved.
        </p>
    </footer>
</body>
</html>

<?php

if (isset($_POST['order'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $card = $_POST['card'];

    $query = "INSERT INTO `order` VALUES ('$name', '$email', '$contact', '$address', '$city', '$zip', '$card')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data inserted into database";
    } else {
        echo "Failed to insert data into database";
    }
}
?>
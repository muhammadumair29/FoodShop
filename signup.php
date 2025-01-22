<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="#" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <i class="fa fa-user"></i>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <i class="fa fa-envelope"></i>
            </div>
            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="phone" id="phone" name="phone" required>
                <i class="fa fa-envelope"></i>
            </div>
            <div class="input-group">
                <label for="address">Address</label>
                <input type="address" id="address" name="address" required>
                <i class="fa fa-envelope"></i>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <i class="fa fa-lock"></i>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <i class="fa fa-lock"></i>
            </div>
            <button type="submit" class="btn" name="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $query = "INSERT INTO signup VALUES ('$username', '$email', '$phone', '$address', '$password', '$confirm_password')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data inserted into database";
    } else {
        echo "Failed to insert data into database";
    }
}
?>
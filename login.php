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
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <i class="fa fa-user"></i>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <i class="fa fa-lock"></i>
            </div>
            <button type="submit" class="btn" name="login">Login</button>
            <a href="#" class="forgot-password">Forgot Password?</a>
        </form>
    </div>
</body>
</html>

<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM signup WHERE username='$username' AND password='$password'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

    if ($total == 1) {
        echo "Login successful";
    } else {
        echo "Login failed";
    }
}

// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
   
//     $password = $_POST['password'];

//     $query = "INSERT INTO login VALUES ('$username', '$password')";
//     $data = mysqli_query($conn, $query);

//     if ($data) {
//         echo "Data inserted into database";
//     } else {
//         echo "Failed to insert data into database";
//     }
// }
?>
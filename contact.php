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
    <!-- Contact Us Section -->
<div class="contact-us-section">
    <h2>Contact Us</h2>
    <form class="contact-form" action="#" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn" name="send">Send Message</button>
    </form>
  </div>
</body>
</html> 

<?php

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact VALUES ('$name', '$email', '$message')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data inserted into database";
    } else {
        echo "Failed to insert data into database";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
  <div class="box">
    <h2>Sign Up</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Sign Up">
      </div>
    </form>
    <p>Already have an account? <a href="login.php">Sign In</a></p>
    
  </div>
  <div class="social-media-login">
    <div class="logo-text">
       <img src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-64.png" alt="">
        <p>continue  with 11google</p>
    </div>
    <p>------or-------</p>
    <div class="logo-text">
       <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Facebook_colored_svg_copy-64.png" alt="">
        <p>continue with facebook</p>
    </div>
</div>

</body>
</html>


<?php
require_once 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert user into the database
    $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Sign up successful!";
    
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

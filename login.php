
<?php

require_once 'db_connect.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check user credentials
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Sign in successful!";
        // You can redirect the user to a different page after successful sign-in
    } else {
        $error = "Invalid email or password";
       
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
  <div class="box">
    <h2>Sign In</h2>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>

      

      <div class="form-group">
        <input type="submit" value="Sign In">
      </div>
      <?php if (!empty($error)) { ?>
            <p class="error"><?php echo $error; ?></p>
        <?php } ?>
    </form>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
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
</div>

</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>



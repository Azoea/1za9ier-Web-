<?php

session_start();
if (isset($_SESSION['errors'])) {
  $errors = $_SESSION['errors'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1za9ier</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

 <!-- Header Section -->
 <header>
        <div class="nav-bar">
            <h1>1za9ier</h1>
            <nav>
                <button onclick="navigateTo('index.html')">HOME</button>
                <button onclick="navigateTo('women.html')">SHOP WOMENSWEAR</button>
                <button class="nav-button" data-page="men.html" onclick="navigateTo('men.html')">SHOP MENSWEAR</button>
          
            </nav>
            <button class="login-button" id="openLoginModal">Login</button>
        </div>
    </header>

    



  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <?php
    if (isset($errors['login'])) {
      echo '<div class="error-main">
                    <p>' . $errors['login'] . '</p>
                    </div>';
      unset($errors['login']);
    }
    ?>
    <form method="POST" action="user-account.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <?php
        if (isset($errors['email'])) {
          echo ' <div class="error">
                    <p>' . $errors['email'] . '</p>
                </div>';
        }
        ?>
      </div>
      <div class="input-group password">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <i id="eye" class="fa fa-eye"></i>
        <?php
        if (isset($errors['password'])) {
          echo ' <div class="error">
                    <p>' . $errors['password'] . '</p>
                </div>';
        }
        ?>
      </div>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <input type="submit" class="btn" value="Sign In" name="signin">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Don't have account yet?</p>
      <a href="register.php">Sign Up</a>
    </div>
  </div>









 




  
  <!-- Footer Section -->
  <footer>
        <p>1za9ier All rights reserved.</p>
        <div class="social-links">
            <a href="https://twitter.com" target="_blank">Twitter</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://discord.com" target="_blank">Discord</a>
        </div>
    </footer>

  <script src="script.js"></script>
</body>

</html>
<?php
if (isset($_SESSION['errors'])) {
  unset($_SESSION['errors']);
}
?>
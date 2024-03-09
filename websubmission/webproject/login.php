<?php
// Include the dbconnect.php file to establish a database connection
require_once 'dbconnect.php';

// Start a session
session_start();

// Process form data on submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate and sanitize the data (you can add your own validation logic here)

    // Check if the entered username and password match a record in the user table
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Authentication successful, create a session
        $_SESSION['username'] = $username;
        header("Location: Homepage.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ABC Mobile | Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
      .password-toggle {
        margin-top: 10px;
      }
    </style>
  </head>

  <body>
    <a href="Homepage.php"><p1>&#9587;</p1></a>
    <form class="box" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <h1>Login ABC</h1>
      <img src="image/loginicon.png" width="150px">
      <input type="text" name="username" id="username" value="" placeholder="User Name"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}"
        title="Including Uppercase and number with your name 
        e.g: ABCKwong77"
        required >

      <input type="password" name="password" id="password" placeholder="Password" required>

 <div class="password-toggle">
        <input type="checkbox" id="showPassword">
        <label for="showPassword">Show Password</label>
      </div>
      
      <input type="submit" name="submit" id="submit" value="Login">
      <a href="register.php"><input type="register" name="register" id="register" value="Register"></a>

      
      <a href="Homepage.php" class="back-button">
        <span>&#8592;</span> Back to Homepage
      </a>
    </form>

    <script>
      const passwordInput = document.getElementById("password");
      const showPasswordToggle = document.getElementById("showPassword");

      showPasswordToggle.addEventListener("change", function () {
        if (this.checked) {
          passwordInput.type = "text";
        } else {
          passwordInput.type = "password";
        }
      });
    </script>
  </body>
</html>


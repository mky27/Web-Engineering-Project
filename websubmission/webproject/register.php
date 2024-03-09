<?php
// Database connection credentials
$hostname = 'localhost';
$username = 'inventor_admin';
$password = '080900290797bA';
$database = 'inventor_webproject';

// Establish database connection
$connection = mysqli_connect($hostname, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form data on submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phonenumber'];

    // Validate and sanitize the data (you can add your own validation logic here)

    // Insert data into the database
    $sql = "INSERT INTO user (username, password, phoneNumber) VALUES ('$username', '$password', '$phoneNumber')";
    if (mysqli_query($connection, $sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ABC Mobile | Register</title>
    <link rel="stylesheet" href="login.css">
    <style>
      .password-toggle {
        margin-top: 10px;
      }
      .error-message {
        color: red;
      }
    </style>
  </head>

  <body>
    <a href="Homepage.php"><p1>&#9587;</p1></a>
    <form class="box" action="register.php" method="POST" onsubmit="return validateForm()">
      <h1>Register ABC</h1>
      <img src="image/loginicon.png" width="150px">
      <input type="text" name="username" id="username" value="" placeholder="User Name"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{2,}"
        title="Including Uppercase and number with your name 
        e.g: LengzaiKwong77"
        required >

      <input type="tel" name="phonenumber" id="phonenumber" value="" placeholder="Phone Number"
        pattern="[0-9]{3}-[0-9]{7,8}" 
        title="Please enter a valid phone number e.g: 012-3456789"
        required>

      <input type="password" name="password" id="password" placeholder="Password" required>

      <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
      <div id="passwordMatchError" class="error-message" style="display: none;">Passwords do not match.</div>
      
      <div class="password-toggle">
        <input type="checkbox" id="showPassword">
        <label for="showPassword">Show Password</label>
      </div>

      <input type="submit" name="submit" id="submit" value="Register">
      <a href="Homepage.php" class="back-button">
        <span>&#8592;</span> Back to Homepage
      </a>
    </form>

    <script>
      const passwordInput = document.getElementById("password");
      const confirmPasswordInput = document.getElementById("confirm_password");
      const showPasswordToggle = document.getElementById("showPassword");
      const passwordMatchError = document.getElementById("passwordMatchError");

      showPasswordToggle.addEventListener("change", function () {
        const passwordFieldType = this.checked ? "text" : "password";
        passwordInput.type = passwordFieldType;
        confirmPasswordInput.type = passwordFieldType;
      });

      function validateForm() {
        if (passwordInput.value !== confirmPasswordInput.value) {
          passwordMatchError.style.display = "block";
          return false;
        }
        passwordMatchError.style.display = "none";
        return true;
      }
    </script>
  </body>
</html>



<?php

// Database configuration
$hostname = 'localhost';
$username = 'inventor_admin';
$password = '080900290797bA';
$database = 'inventor_webproject';

// Create a database connection
$connection = mysqli_connect($hostname, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
// If the connection is successful, you can perform database operations using the $conn variable.

?>

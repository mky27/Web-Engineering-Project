<?php
// Include the dbconnect.php file
require_once "dbconnect.php";

if (isset($_GET['id'])) {
    $rowId = $_GET['id'];
    $sql = "UPDATE dataplan SET status = 'Unsubscribed' WHERE id = $rowId";
    mysqli_query($connection, $sql);
    
    header("Location: purchases.php");
    exit();
}
?>
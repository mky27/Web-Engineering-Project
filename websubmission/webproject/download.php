<?php
// Database connection
require_once "dbconnect.php";

// Get the image ID from the URL parameter
if (isset($_GET['id'])) {
    $imageId = $_GET['id'];

    // Fetch the image path and file extension from the database
    $query = "SELECT image_path, file_extension FROM receipt WHERE id = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $imageId);
    $stmt->execute();
    $stmt->bind_result($imagePath, $fileExtension);

    if ($stmt->fetch()) {
        $imageData = file_get_contents($imagePath);
        $contentType = mime_content_type($imagePath);

        // Set the appropriate headers for downloading
        header("Content-Type: $contentType");
        header("Content-Disposition: attachment; filename=\"receipt.$fileExtension\"");

        // Output the image data
        ob_clean();
        flush();
        echo $imageData;
        exit();
    }

    $stmt->close();
}

// If the image ID is not valid or doesn't exist, redirect to an error page
header("Location: purchases.php");
exit();
?>

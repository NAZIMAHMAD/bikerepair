<?php
// Include the database connection file
include 'db.php';

// Enable error reporting for development (optional)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define paths and filenames
    $uploadsDir = 'uploads/';
    $fileName = basename($_FILES["file"]["name"]);
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileDestination = $uploadsDir . $fileName;
    
    // Check if the file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        // Ensure the uploads directory exists
        if (!is_dir($uploadsDir)) {
            if (!mkdir($uploadsDir, 0777, true)) {
                // Log error if directory creation fails
                error_log("Failed to create uploads directory.");
                exit('An error occurred while creating the uploads directory.');
            }
        }

        // Attempt to move the uploaded file
        if (move_uploaded_file($fileTmpName, $fileDestination)) {
            // Retrieve form data
            $title = $_POST['title'];
            $parh = $_POST['parh'];

            // Prepare and execute the SQL statement
            $stmt = $conn->prepare("INSERT INTO blog (img, title, parh) VALUES (?, ?, ?)");
            if ($stmt === false) {
                // Log the error and exit
                error_log("Prepare failed: " . $conn->error);
                exit('An error occurred while preparing the SQL statement.');
            }
            $stmt->bind_param("sss", $fileName, $title, $parh);

            // Execute the statement and check for errors
            if ($stmt->execute()) {
                // Optionally redirect or display a success message
                header('Location:index.php'); // Redirect to a success page
                exit;
            } else {
                // Log the error and exit
                error_log("Error executing query: " . $stmt->error);
                exit('An error occurred while executing the SQL query.');
            }

            // Close the statement
            $stmt->close();
        } else {
            // Log the error and exit
            error_log("Error moving uploaded file: " . error_get_last()['message']);
            exit('An error occurred while moving the uploaded file.');
        }
    } else {
        // Log the upload error and exit
        error_log("No file uploaded or there was an upload error: " . $_FILES["file"]["error"]);
        exit('An error occurred while uploading the file.');
    }

    // Close database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <link rel="stylesheet" href="backcss.php">
    <link rel="stylesheet" href="backres.php">


</head>
<body>
    <div class="form_container">

    <h3>create the blog</h3>
        <form class="form_container_child" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="" required>
            <input type="text" placeholder="title" name="title" required>
            <textarea type="text" placeholder="Description" name="parh" rows="10" cols="50" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

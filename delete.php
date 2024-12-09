<?php
// Include the database connection file
include 'db.php';

// Check if 'id' is set in the query string
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure the ID is an integer

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("DELETE FROM blog WHERE id = ?");
    if ($stmt === false) {
        error_log("Prepare failed: " . $conn->error);
        die("An error occurred while preparing the SQL statement.");
    }

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect back to the admin dashboard
        header('Location: admin.php'); // Adjust the path as needed
        exit;
    } else {
        error_log("Error executing query: " . $stmt->error);
        die("An error occurred while executing the SQL query.");
    }

    // Close the statement
    $stmt->close();
} else {
    die("No ID specified for deletion.");
}

// Close the database connection
$conn->close();
?>

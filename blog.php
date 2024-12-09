<?php
// Include the database connection file
include 'db.php';

// Enable error reporting for debugging (optional)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Fetch data from the database
$sql = "SELECT img, title, parh FROM blog";
$result = $conn->query($sql);

if ($result === false) {
    // Log and handle query error
    error_log("Error fetching data: " . $conn->error);
    die("An error occurred while fetching blog data.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Update</title>
    <link href="/style.php" rel="stylesheet" />
</head>
<body>
    <section class="blog_container">
        <div class="scroll_container">
            <?php
            // Check if there are any rows
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="blog_card">';
                    echo '<img src="uploads/' . htmlspecialchars($row["img"]) . '" alt="Blog Image" />';
                   
                    echo '<div class="blog_card_content">';
                    echo '<h4>' . htmlspecialchars($row["title"]) . '</h4>';
                    echo '<p>' . htmlspecialchars($row["parh"]) . '</p>';
                    echo '</div>';
                    echo '</div>';

                }
            } 
            ?>
        </div>
    </section>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

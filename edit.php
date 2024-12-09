<?php
// Include the database connection file
include 'db.php';

// Check if 'id' is set in the query string
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure the ID is an integer

    // Fetch the existing data for the blog entry
    $stmt = $conn->prepare("SELECT img, title, parh FROM blog WHERE id = ?");
    if ($stmt === false) {
        error_log("Prepare failed: " . $conn->error);
        die("An error occurred while preparing the SQL statement.");
    }

    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $blog = $result->fetch_assoc();

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $title = $_POST['title'];
        $parh = $_POST['parh'];

        // Handle file upload if a new file is uploaded
        if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
            $fileName = basename($_FILES["file"]["name"]);
            $fileTmpName = $_FILES["file"]["tmp_name"];
            $fileDestination = 'uploads/' . $fileName;

            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                // Update blog entry with new image
                $imgUpdate = $fileName;
            } else {
                error_log("Error moving uploaded file: " . error_get_last()['message']);
                die("An error occurred while moving the uploaded file.");
            }
        } else {
            // If no new file is uploaded, keep the old image
            $imgUpdate = $blog['img'];
        }

        // Prepare and execute the update statement
        $stmt = $conn->prepare("UPDATE blog SET img = ?, title = ?, parh = ? WHERE id = ?");
        if ($stmt === false) {
            error_log("Prepare failed: " . $conn->error);
            die("An error occurred while preparing the SQL statement.");
        }

        $stmt->bind_param("sssi", $imgUpdate, $title, $parh, $id);

        if ($stmt->execute()) {
            // Redirect to the admin dashboard after updating
            header('Location: admin.php'); // Adjust the path as needed
            exit;
        } else {
            error_log("Error executing query: " . $stmt->error);
            die("An error occurred while executing the SQL query.");
        }

        // Close the statement
        $stmt->close();
    }
} else {
    die("No ID specified for editing.");
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog Entry</title>
    <link rel="stylesheet" href="backcss.php">
    <link rel="stylesheet" href="backres.php">

</head>
<body>
       

        <div class="form_section">

            <div class="form_container">
            <h3>edit blog </h3>

                <form method="post" enctype="multipart/form-data">
                    <div class="form_group">
                        <input type="file" name="file" id="file">
                        <?php if ($blog['img']): ?>
                            <img src="uploads/<?php echo htmlspecialchars($blog['img']); ?>" alt="Current Image" style="width: 100px; height: auto;">
                        <?php endif; ?>
                    </div>
                    <div class="form_group">
                        <input type="text" name="title" id="title" placeholder="title" value="<?php echo htmlspecialchars($blog['title']); ?>" required>
                    </div>
                    <div class="form_group">
                      

                        <textarea type="text" placeholder="Description" name="parh" rows="10" cols="50" value="<?php echo htmlspecialchars($blog['parh']); ?>" required></textarea>

                    </div>
                    <button type="submit">Update</button>
                </form>
            </div>
                        </div>

</body>
</html>

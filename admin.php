<?php
// Include the database connection file
include 'db.php';

// Fetch data from the database
$sql = "SELECT id, img, title, parh FROM blog"; // Assuming you have an 'id' column for editing and deleting
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
    <title>Admin - Dashboard</title>
    <link rel="stylesheet" href="backcss.php">
    <link rel="stylesheet" href="backres.php">

</head>
<body>
<main>
    <header>
        <h3>Admin Dashboard</h3>
    </header>

    <section class="main_section">
        <div class="main_section_left">
            <ul>
                <li><a href="./frontend/index.php">Home</a></li>
                <li><a href="create.php">create</a></li>

            </ul>
        </div>

        <div class="main_section_right">
            <div class="main_section_right_child">
                <ul class="main_section_right_child_header">
                    <li>Sr No</li>
                    <li>Img</li>
                    <li>Title</li>
                    <li>Description</li>
                    <li>Create</li>
                    <li>Edit</li>
                    <li>Delete</li>
                </ul>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <ul class="main_section_right_child_item">
                            <li><?php echo htmlspecialchars($row['id']); ?></li>
                            <li><img src="uploads/<?php echo htmlspecialchars($row['img']); ?>" alt="Blog Image" style="width: 100px; height: auto;" /></li>
                            <li><?php echo htmlspecialchars($row['title']); ?></li>
                            <li><?php echo htmlspecialchars($row['parh']); ?></li>
                            <li><a href="create.php">Create</a></li> <!-- Link to create page -->
                            <li><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></li> <!-- Link to edit page with ID parameter -->
                            <li><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></li> <!-- Link to delete page with ID parameter -->
                        </ul>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>No data available.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

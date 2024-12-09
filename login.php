<?php


// Initialize error message variable
$error_message = "";
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Define correct credentials
    $correct_username = "shah@1224#";
    $correct_password = "Varun@92347#";

    // Check if credentials match
    if ($username === $correct_username && $password === $correct_password) {
        // Redirect to the admin page
        header("Location: admin.php");
        exit(); // Ensure no further code is executed after redirection
    } else {
        // Show an error message
        $error_message = "Invalid username or password.";
        }
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

<link href="backcss.php" rel="stylesheet" />
<link rel="stylesheet" href="backres.php">

<style>
        .error_message {
            color: red; /* Red color for error message */
            margin-top: 10px; /* Space above the error message */
        }
    </style>


</head>





<body>



<section class="login_container">



<div class="login_container_child">


<div class="login_container_child_left">


<img src="https://i.pinimg.com/originals/ac/5d/d9/ac5dd9fe4afdc1c69bc0f1f7edaa4713.jpg" alt="img">

</div>

<div class="login_container_child_right">

<form class="form_box" method="post" action="">



<h1>admin login</h1>

<div class="form_box_child">

<label> username </label>

<input type="text" placeholder="enter the username" name="username" required >

</div>

<div class="form_box_child">

<label> password </label>

<input type="password" placeholder="enter the password " name="password" required>


 <!-- Display error message if any -->
<?php if ($error_message): ?>
    <div class="error_message">
        <?php echo $error_message; ?>
    </div>
<?php endif; ?>


</div>

<input type="submit" value="submit">


</form>


</div>







</section>







</body>
</html>
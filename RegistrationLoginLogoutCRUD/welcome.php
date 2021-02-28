<?php
session_start();

if (isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Welcome</title>
</head>
<body>
    <h2 align="center">Welcome <?php echo $_SESSION['username']; ?>!</h2>
<p align="center">
    <a href="dashboard.php">Dashboard</a> |
    <a href="logout.php">Logout</a>
</p>
<br>

<footer align="center">	&#169; Created by Pranav | 2021</footer>

</body>
</html>

<?php 
} else {
    echo "Please Login First";
    header("Location:login.php");
}

?>
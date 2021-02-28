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
    <title>Dashboard</title>
</head>
<body>
    <h1 align="center">This is <?php echo $_SESSION['username']; ?>'s Dashboard</h1>
<p align="center">
    <a href="welcome.php">Welcome Page</a> |
    <a href="viewrecord.php">View Records</a> |
    <a href="addrecord.php">Add Record</a> |
    <a href="logout.php">Logout</a>
</p>
<br>

<footer align="center">	&#169; Created by Pranav | 2021</footer>

</body>
</html>

<?php
}

?>
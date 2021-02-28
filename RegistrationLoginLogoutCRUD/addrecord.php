<?php
session_start();

// The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL.
if(isset($_SESSION['username'])) {

// Use isset on post and get method and write the variables inside the if block so the error undefiend index wont persist
if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['department']) || isset($_POST['salary'])) {    
$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$salary = $_POST['salary'];
}


if ((isset($_POST['submit']))) {
    
$linking = mysqli_connect("localhost", "root", "", "employee_project");

if (!$linking) {
    die("Could Not Connect".mysqli_connect_error());
}

$sqlQuery = "INSERT INTO demoinfo(name, email, department, salary) VALUES ('$name', '$email', '$department', '$salary')";

    if (mysqli_query($linking, $sqlQuery)) {
        echo "<script> alert('Record Inserted Successfully'); </script>";
        echo "<script>
        window.location='viewrecord.php';
        </script>";
    } else {
        echo "<script> alert('Could not insert record: '); </script>".mysqli_error($linking);
    }

mysqli_close($linking);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Add Record</title>
</head>
<body>
<div class="form">
<p align="center"><a href="dashboard.php">Dashboard</a> 
| <a href="viewrecord.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1 align="center">Add Record</h1>
<form align="center" name="form" method="post" action=""> 
<input type="hidden" name="new" value="" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="email" placeholder="Enter Email" required /></p>
<p><input type="text" name="department" placeholder="Enter Department" required /></p>
<p><input type="text" name="salary" placeholder="Enter Salary" required /></p>

<p><input name="submit" type="submit" value="Submit" /></p>
</form>
</div>
</div>
<br>

<footer align="center">	&#169; Created by Pranav | 2021</footer>

</body>
</html>

<?php } ?>
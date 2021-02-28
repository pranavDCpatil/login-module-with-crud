<?php
session_start();

if (isset($_SESSION['username'])) {
    if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['department']) || isset($_POST['salary'])) {    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $salary = $_POST['salary'];
    }
        
    // acquiring and storing the `edit` from the file viewrecord.php
    $edit = $_GET['edit'];

    $linking = mysqli_connect("localhost", "root", "", "employee_project");

    $query = "SELECT * FROM demoinfo WHERE `id`='$edit'"; 
    $result = mysqli_query($linking, $query);
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit Records</title>
</head>
<body>
    <div class="form">
    <p align="center"><a href="dashboard.php">Dashboard</a> 
        | <a href="viewrecord.php">View Record</a> 
        | <a href="logout.php">Logout</a></p>
    <h1 align="center">Update Record</h1>

<?php
if (isset($_POST['submit'])) {
    $linking = mysqli_connect("localhost", "root", "", "employee_project");

    $updateQuery = "UPDATE demoinfo SET `name`='$name',`email`='$email',`department`='$department',`salary`='$salary' WHERE `id`='$edit'";

    $result = mysqli_query($linking, $updateQuery);
    $row = mysqli_fetch_assoc($result);

    // echo $updateQuery;

        echo "<script> alert('Records have been updated!'); </script>";
        echo "<script>
        window.location='viewrecord.php';
        </script>";
} ?>

    <div>
        <form name="form" method="post" action=""> 
            <input type="hidden" name="new" value="" />
            <input  type="hidden" value="<?php echo $edit; ?>" name="edit" />

            <p align="center"><input type="text" name="name" placeholder="Enter Name" 
            required value="<?php echo $row['name']; ?>" /></p>

            <p align="center"><input type="text" name="email" placeholder="Enter Email" 
            required value="<?php echo $row['email']; ?>" /></p>

            <p align="center"><input type="text" name="department" placeholder="Enter Department" 
            required value="<?php echo $row['department']; ?>" /></p>

            <p align="center"><input type="text" name="salary" placeholder="Enter Salary" 
            required value="<?php echo $row['salary']; ?>" /></p>

            <p align="center"><input name="submit" type="submit" value="Update" /></p>
        </form>


<?php
} ?>
    </div>

</div>
<br>

<footer align="center">	&#169; Created by Pranav | 2021</footer>

</body>
</html>

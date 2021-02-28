<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION['username'] = $username;

$linking = mysqli_connect("localhost", "root", "", "employee_project");

$sqlQuery = "SELECT * FROM login_info WHERE username = '$username' and password = '$password'";

$result = mysqli_query($linking, $sqlQuery);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count >= 1) {
    echo "<script>
        alert('Login Sucessful');
    </script>";
    echo "<script>
        window.location='welcome.php';
    </script>";
} else {
    echo "<script> alert('Login Failed. Invalid Username or Password.'); </script>";
    echo "<script>
        window.location='login.php';
    </script>";
}


// ($count >= 1) ? "<script> alert('Login Sucessful'); </script>"; "<script> window.location='welcome.php'; </script>"; : "<script> alert('Login Failed. Invalid Username or Password.'); </script>"; "<script> window.location='login.php'; </script>"

?>
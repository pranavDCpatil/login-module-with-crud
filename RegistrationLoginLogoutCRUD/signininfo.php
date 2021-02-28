<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if ($username == "") {
    echo "<script> 
    alert('Username should not be blank');
    window.location = 'registration.html';
    </script>";
} else if ($email == "") {
    echo "<script> 
    alert('Email should not be blank');
    window.location = 'registration.html';
    </script>";
} else if ($password == "") {
    echo "<script> 
    alert('Password should not be blank');
    window.location = 'registration.html';
    </script>";
} else if ($password != $confirmPassword) {
    echo "<script> 
    alert('Password and confirm Password should be same');
    window.location = 'registration.html';
    </script>";
} else {
    $linking = mysqli_connect("localhost", "root", "", "employee_project");

    if ($linking === false) {
        die("ERROR: Could Not Connect".mysqli_connect_error());
    }

    $sqlQuery  = "INSERT INTO login_info (username, email, password) VALUES('$username', '$email', '$password')";

    if (mysqli_query($linking, $sqlQuery)) {
        echo "<script> 
        alert('Registration Completed Successfully.');
        window.location = 'login.php';
        </script>";
    } else {
        echo "ERROR: Could Not Be Able To Execute.".mysqli_error($linking);
    }

    mysqli_close($linking);
}

?>
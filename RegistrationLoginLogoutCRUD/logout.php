<?php
session_start();
unset($_SESSION["username"]);

        echo "<script> alert('You have been logged out!'); </script>";
        echo "<script>
        window.location='login.php';
        </script>";
?>
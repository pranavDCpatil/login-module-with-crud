<?php
session_start();
 if (isset($_SESSION['username'])) {
     $delete = $_GET['delete'];

     $linking = mysqli_connect("localhost", "root", "", "employee_project");
     
     $sqlQuery = "DELETE FROM demoinfo WHERE `id`='$delete'";

     if (mysqli_query($linking, $sqlQuery)) {
        echo "<script> alert('Records have been deleted!'); </script>";
        echo "<script>
        window.location='viewrecord.php';
        </script>";
     }
 }

?>
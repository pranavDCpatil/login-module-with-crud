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
    <title>Records</title>
</head>
<body>
    <form align="center" action="" method="get">
        <input type="text" name="searchBox" placeholder="Search...">
        <input type="submit" value="Search" name="search">
    </form>

    <div class="form">
    <p align="center"><a href="dashboard.php">Dashboard</a> |
    <a href="addrecord.php">Add Record</a></p>
    </div>
<br>
<?php
    if ((isset($_GET['search']))) {
        $searchBox = $_GET['searchBox'];

        $linking = mysqli_connect("localhost", "root", "", "employee_project");

        $sqlQuery = "SELECT * FROM demoinfo WHERE name='$searchBox'";

        $result = mysqli_query($linking, $sqlQuery);
    
?>

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Email</strong></th>
<th><strong>Department</strong></th>
<th><strong>Salary</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>

<tbody>
<?php while ($row = mysqli_fetch_array($result)) { ?>
	   <tr>
			<td align="center"><?php echo $row['id']; ?></td>
			<td align="center"><?php echo $row['name']; ?></td>
            <td align="center"><?php echo $row['email']; ?></td>
            <td align="center"><?php echo $row['department']; ?></td>
            <td align="center"><?php echo $row['salary']; ?></td>

			<td align="center"><a href="edit.php?edit=<?php echo $row['id']; ?>" >Edit</a>
			</td>
			<td align="center"><a href="deleterecord.php?delete=<?php echo $row['id']; ?>" >Delete</td>
		</tr>
	<?php } ?>
</tbody>
</table>
<?php } else {

?>

<?php
    $linking = mysqli_connect("localhost","root","","employee_project");
    $sqlQuery="SELECT * FROM demoinfo";

    $result = mysqli_query($linking, $sqlQuery);
?>

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Email</strong></th>
<th><strong>Department</strong></th>
<th><strong>Salary</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>

<tbody>
<?php while ($row = mysqli_fetch_array($result)) { ?>
	   <tr>
			<td align="center"><?php echo $row['id']; ?></td>
			<td align="center"><?php echo $row['name']; ?></td>
            <td align="center"><?php echo $row['email']; ?></td>
            <td align="center"><?php echo $row['department']; ?></td>
            <td align="center"><?php echo $row['salary']; ?></td>

			<td align="center"><a href="edit.php?edit=<?php echo $row['id']; ?>" >Edit</a>
			</td>
			<td align="center"><a href="deleterecord.php?delete=<?php echo $row['id']; ?>" >Delete</td>
		</tr>
	<?php } ?>
</tbody>
</table>

<?php } ?>
<br>
<footer align="center">	&#169; Created by Pranav | 2021</footer>

</body>
</html>

<?php } ?>
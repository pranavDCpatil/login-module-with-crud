<!-- The login page after signing in -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <div class="form">
        <h1 align="center">Log In</h1>
        <form align="center" action="check.php" method="post" name="login">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <input type="submit" name="submit" value="Login" />
        </form>
        <p align="center">Not registered yet? <a href="registration.html">Register Here</a></p>
    </div>
<br>

    <footer align="center">	&#169; Created by Pranav | 2021</footer>
</body>
</html>